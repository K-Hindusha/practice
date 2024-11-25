import { Component } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';  // Import CommonModule

@Component({
  selector: 'app-contact',
  templateUrl: './contact.component.html',
  standalone: true,
  imports: [FormsModule, CommonModule],  // Add CommonModule to imports
})
export class ContactComponent {
  name: string = '';
  email: string = '';
  submitted: boolean = false;

  onSubmit() {
    this.submitted = true;
  }
}
