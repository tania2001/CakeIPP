@extends('layouts.app')

@section('contenido')
<v-app>
   <template v-if="menu==0">
       <example-component></example-component>
   </template>
   <template v-if="menu==1">
       <Categorias></Categorias>
   </template>
   <template v-if="menu==2">
       <example-component></example-component>
   </template>
   <template v-if="menu==3">
    <example-component></example-component>
   </template>
   <template v-if="menu==4">
       <example-component></example-component>
   </template>
   <template v-if="menu==5">
        <example-component></example-component>
   </template>
   <template v-if="menu==6">
       <example-component></example-component>
   </template>
   <template v-if="menu==7">
    <example-component></example-component>
   </template>
   <template v-if="menu==8">
       <example-component></example-component>
   </template>
   <template v-if="menu==9">
       <example-component></example-component>
   </template>
   <template v-if="menu==10">
       <example-component></example-component>
   </template>
   <template v-if="menu==11">
        <example-component></example-component>
   </template>
   <template v-if="menu==12">
       <example-component></example-component>
   </template>
   <template v-if="menu==13">
       <example-component></example-component>
   </template>
   <template v-if="menu==14">
       <example-component></example-component>
   </template>
   <template v-if="menu==15">
       <Cajas></Cajas>
   </template>
   </v-app>
@endsection