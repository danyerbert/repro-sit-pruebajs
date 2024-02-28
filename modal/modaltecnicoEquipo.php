<!-- Modal -->
<div class="modal fade" id="verificarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-titlen text-dark mx-auto" id="AgregarReparacion">Reparacion de equipo
                </h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="verifificartecnico.php" method="POST">
                    <div class="form-group">
                        <label for="serial_entrada_tm">Serial de entrada (Tarjta Madre)</label>
                        <input type="text" class="form-control" id="serial_entrada_tm" name="serial_entrada_tm"
                            pattern="[A-Z0-9]{12}" title="Maximo de Caracteres 12. Solo mayusculas y numeros.">
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="serial_salida_tm">Serial de salida (Tarjta Madre)</label>
                        <input type="text" class="form-control" id="serial_salida_tm" name="serial_salida_tm"
                            pattern="[A-Z0-9]{12}" title="Maximo de Caracteres 12. Solo mayusculas y numeros.">
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="pila_bios">Cambio de pila de Bios?</label>
                        <div class="form-check">
                            <input class="form-check-input i-radio" type="radio" name="pila_bios" id="pila_bios_1"
                                value="si">
                            <label class="form-check-label" for="pila_bios_1">
                                Si
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input " type="radio" name="pila_bios" id="pila_bios_2"
                                value="no">
                            <label class="form-check-label" for="pila_bios_2">
                                No
                            </label>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="serial_entrada_bat">Serial de entrada (Bacteria)</label>
                        <input type="text" class="form-control" id="serial_entrada_bat" name="serial_entrada_bat"
                            pattern="[A-Z0-9]{25}" title="Caracteres maximos 25. Solo mayusculas y numeros">
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="serial_salida_bat">Serial de salida (Bacteria)</label>
                        <input type="text" class="form-control" id="serial_salida_bat" name="serial_salida_bat"
                            pattern="[A-Z0-9]{25}" title="Caracteres maximos 25. Solo mayusculas y numeros">
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="serial_entrada_tarj_aios">Serial de entrada (Tarjeta IOS)</label>
                        <input type="text" class="form-control" id="serial_entrada_tarj_aios"
                            name="serial_entrada_tarj_aios" pattern="[A-Z0-9]{25}"
                            title="Caracteres maximos 25. Solo mayusculas y numeros">
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="serial_salida_tarj_aios">Serial de salida (Tarjeta IOS)</label>
                        <input type="text" class="form-control" id="serial_salida_tarj_aios"
                            name="serial_salida_tarj_aios" pattern="[A-Z0-9]{25}"
                            title="Caracteres maximos 25. Solo mayusculas y numeros">
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="serial_entrada_disco_duro">Serial de entrada (Disco Duro)</label>
                        <input type="text" class="form-control" id="serial_entrada_disco_duro"
                            name="serial_entrada_disco_duro" pattern="[A-Z0-9]{25}"
                            title="Caracteres maximos 25. Solo mayusculas y numeros">
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="serial_salida_disco_duro">Serial de salida (Disco Duro)</label>
                        <input type="text" class="form-control" id="serial_salida_disco_duro"
                            name="serial_salida_disco_duro" pattern="[A-Z0-9]{25}"
                            title="Caracteres maximos 25. Solo mayusculas y numeros">
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="serial_entrada_cara_a">Serial de entrada (Cara A)</label>
                        <input type="text" class="form-control" id="serial_entrada_cara_a" name="serial_entrada_cara_a"
                            pattern="[A-Z0-9]{18}" title="Caracteres maximos 18. Solo mayusculas y numeros">
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="serial_salida_cara_a">Serial de salida (Cara A)</label>
                        <input type="text" class="form-control" id="serial_salida_cara_a" name="serial_salida_cara_a"
                            pattern="[A-Z0-9]{18}" title="Caracteres maximos 18. Solo mayusculas y numeros">
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="serial_entrada_cara_b">Se realizo cambio de (Cara B)?</label>
                        <div class="form-check">
                            <input class="form-check-input i-radio" type="radio" name="cara_b" id="serial_caraB"
                                value="si">
                            <label class="form-check-label" for="serial_caraB">
                                Si
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input " type="radio" name="cara_b" id="serial_caraB"
                                value="no">
                            <label class="form-check-label" for="serial_caraB">
                                No
                            </label>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="serial_entrada_cara_c">Se realizo cambio de (Cara C)?</label>
                        <div class="form-check">
                            <input class="form-check-input i-radio" type="radio" name="cara_c" id="serial_caraC1"
                                value="si">
                            <label class="form-check-label" for="serial_caraC1">
                                Si
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input " type="radio" name="cara_c" id="serial_caraC2"
                                value="no">
                            <label class="form-check-label" for="serial_caraC2">
                                No
                            </label>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="serial_entrada_cara_d">Se realizo cambio de (Cara D)?</label>
                        <div class="form-check">
                            <input class="form-check-input i-radio" type="radio" name="cara_d" id="serial_caraD1"
                                value="si">
                            <label class="form-check-label" for="serial_caraD1">
                                Si
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input " type="radio" name="cara_d" id="serial_caraD2"
                                value="no">
                            <label class="form-check-label" for="serial_caraD2">
                                No
                            </label>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="serial_entrada_memoria_ram">Serial de entrada (memoria ram)</label>
                        <input type="text" class="form-control" id="serial_entrada_memoria_ram"
                            name="serial_entrada_memoria_ram" pattern="[A-Z0-9]{15}"
                            title="Maximo de caracteres 15. Solo numeros y letras mayusculas">
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="serial_salida_memoria_ram">Serial de salida (memoria ram)</label>
                        <input type="text" class="form-control" id="serial_salida_memoria_ram"
                            name="serial_salida_memoria_ram" pattern="[A-Z0-9]{15}"
                            title="Maximo de caracteres 15. Solo numeros y letras mayusculas">
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="serial_entrada_teclado">Serial de entrada (teclado)</label>
                        <input type="text" class="form-control" id="serial_entrada_teclado"
                            name="serial_entrada_teclado" pattern="[A-Z0-9]{25}"
                            title="Maximo de caracteres 21. Solo numeros y letras mayusculas">
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="serial_salida_teclado">Serial de salida (teclado)</label>
                        <input type="text" class="form-control" id="serial_salida_teclado" name="serial_salida_teclado"
                            pattern="[A-Z0-9]{25}" title="Maximo de caracteres 21. Solo numeros y letras mayusculas">
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="serial_entrada_cargador">Serial de entrada (cargador)</label>
                        <input type="text" class="form-control" id="serial_entrada_cargador"
                            name="serial_entrada_cargador" pattern="[A-Z0-9]{25}"
                            title="Caracteres maximos 25. Solo mayusculas y numeros.">
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="serial_salida_cargador">Serial de salida (cargador)</label>
                        <input type="text" class="form-control" id="serial_salida_cargador"
                            name="serial_salida_cargador" pattern="[A-Z0-9]{25}"
                            title="Caracteres maximos 25. Solo mayusculas y numeros.">
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="serial_entrada_pantalla">Serial de entrada (pantalla)</label>
                        <input type="text" class="form-control" id="serial_entrada_pantalla"
                            name="serial_entrada_pantalla" pattern="[A-Z0-9]{25}"
                            title="Caracteres maximos 25. Solo mayusculas y numeros.">
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="serial_salida_pantalla">Serial de salida (pantalla)</label>
                        <input type="text" class="form-control" id="serial_salida_pantalla"
                            name="serial_salida_pantalla" pattern="[A-Z0-9]{25}"
                            title="Caracteres maximos 25. Solo mayusculas y numeros.">
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="serial_entrada_tarjeta_red">Serial de entrada (tarjeta de red)</label>
                        <input type="text" class="form-control" id="serial_entrada_tarjeta_red"
                            name="serial_entrada_tarjeta_red" pattern="[A-Z0-9]{18}"
                            title="Caracteres maximos 18. Solo mayusculas y numeros.">
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="serial_salida_tarjeta_red">Serial de salida (tarjeta de red)</label>
                        <input type="text" class="form-control" id="serial_salida_tarjeta_red"
                            name="serial_salida_tarjeta_red" pattern="[A-Z0-9]{18}"
                            title="Caracteres maximos 18. Solo mayusculas y numeros.">
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="serial_entrada_fan_cooler">Serial de entrada (fan cooler)</label>
                        <input type="text" class="form-control" id="serial_entrada_fan_cooler"
                            name="serial_entrada_fan_cooler">
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="serial_salida_fan_cooler">Serial de salida (fan cooler)</label>
                        <input type="text" class="form-control" id="serial_salida_fan_cooler"
                            name="serial_salida_fan_cooler">
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="fan_cooler">¿Cambio el fan cooler?</label>
                        <div class="form-check">
                            <input class="form-check-input i-radio" type="radio" name="fan_cooler" id="fan_cooler_1"
                                value="si">
                            <label class="form-check-label" for="fan_cooler_1">
                                Si
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input " type="radio" name="fan_cooler" id="fan_cooler_2"
                                value="no">
                            <label class="form-check-label" for="fan_cooler_2">
                                No
                            </label>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="observaciones">Observaciones</label>
                        <textarea class="form-control" id="observaciones" rows="3" name="observaciones"></textarea>
                    </div>
                    <hr>
                    <input type="hidden" name="id_status" value="3">
                    <input type="hidden" name="responsable" value="<?php echo $id_usuario;?>">
                    <input type="hidden" name="id_roles" value="<?php echo $rol;?>">
                    <input type="hidden" name="id_dispositivo" value="<?php echo $rowde['id_dispositivo']?>">
                    <input type="hidden" name="tipo_de_dispositivo"
                        value="<?php echo $rowde['id_tipo_de_dispositivo'];?>">
                    <hr>
                    <button type="submit" class="btn btn-success">Actualizar</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                </form>
            </div>
        </div>
    </div>
</div>