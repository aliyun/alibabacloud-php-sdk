<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class ModifyForwardEntryRequest extends Model
{
    /**
     * @description The ID of the DNAT entry.
     *
     * @example dnat-5tfjp3537mi6iokl59g5c****
     *
     * @var string
     */
    public $forwardEntryId;

    /**
     * @description The name of the DNAT entry. The name must be 2 to 128 characters in length. It cannot start with `http://` or `https://`.
     *
     * @example test0
     *
     * @var string
     */
    public $forwardEntryName;

    /**
     * @description The probe port. The port must be within the internal port range. By default, this parameter is left empty.
     *
     * @example 80
     *
     * @var int
     */
    public $healthCheckPort;
    protected $_name = [
        'forwardEntryId'   => 'ForwardEntryId',
        'forwardEntryName' => 'ForwardEntryName',
        'healthCheckPort'  => 'HealthCheckPort',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->forwardEntryId) {
            $res['ForwardEntryId'] = $this->forwardEntryId;
        }
        if (null !== $this->forwardEntryName) {
            $res['ForwardEntryName'] = $this->forwardEntryName;
        }
        if (null !== $this->healthCheckPort) {
            $res['HealthCheckPort'] = $this->healthCheckPort;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyForwardEntryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ForwardEntryId'])) {
            $model->forwardEntryId = $map['ForwardEntryId'];
        }
        if (isset($map['ForwardEntryName'])) {
            $model->forwardEntryName = $map['ForwardEntryName'];
        }
        if (isset($map['HealthCheckPort'])) {
            $model->healthCheckPort = $map['HealthCheckPort'];
        }

        return $model;
    }
}
