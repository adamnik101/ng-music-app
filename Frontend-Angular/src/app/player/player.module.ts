import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import {PlayerComponent} from "./components/player/player.component";
import {SharedModule} from "../shared/shared.module";
import {MatSliderModule} from "@angular/material/slider";



@NgModule({
  declarations: [
    PlayerComponent
  ],
  imports: [
    CommonModule,
    MatSliderModule,
    SharedModule
  ],
  exports: [
    PlayerComponent
  ]
})
export class PlayerModule { }
