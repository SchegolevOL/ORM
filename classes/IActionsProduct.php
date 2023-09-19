<?php

namespace classes;

interface IActionsProduct
{
public function show($id);
public function record($id);
public function recQuantity($id);
public function recPosition($id);
public function recPrice($id);
public function delete($id);

}