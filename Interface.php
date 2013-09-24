<?php

/**
 * Responder Interface
 */

namespace attitude\Elements;

/**
 * Serializer Interface
 *
 * @author Martin Adamko <@martin_adamko>
 * @version v0.1.0
 * @licence MIT
 *
 */
interface Responder_Interface
{
    /**
     * Responses data
     *
     * Returns serialized data
     *
     * @param   mixed   $data   Data to respond
     * @returns string          Response
     *
     */
    public function respond($data);
}
