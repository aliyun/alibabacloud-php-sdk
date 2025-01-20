<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayRouteDetailResponseBody\data\headerOp;

use AlibabaCloud\Dara\Model;

class headerOpItems extends Model
{
    /**
     * @var string
     */
    public $directionType;
    /**
     * @var string
     */
    public $key;
    /**
     * @var string
     */
    public $opType;
    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'directionType' => 'DirectionType',
        'key'           => 'Key',
        'opType'        => 'OpType',
        'value'         => 'Value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->directionType) {
            $res['DirectionType'] = $this->directionType;
        }

        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->opType) {
            $res['OpType'] = $this->opType;
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DirectionType'])) {
            $model->directionType = $map['DirectionType'];
        }

        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        if (isset($map['OpType'])) {
            $model->opType = $map['OpType'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
