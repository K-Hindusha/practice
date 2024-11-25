import { Component } from '@angular/core';
import { FormsModule } from '@angular/forms';

@Component({
  selector: 'app-root',
  standalone: true,
  imports: [FormsModule],
  
  template: `
    <h1>Standalone Angular Form</h1>
    <form #myForm="ngForm" (ngSubmit)="onSubmit(myForm)">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" ngModel required />
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" ngModel required />
      <button type="submit" [disabled]="!myForm.valid">Submit</button>
    </form>
  `,
  styles: []
})
export class AppComponent {
  onSubmit(form: any) {
    console.log('Form submitted:', form.value); // Logs the form values to the console
  }
}
