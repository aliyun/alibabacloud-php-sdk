<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteWafStatusResponseBody\data\headerOp;

use AlibabaCloud\Tea\Model;

class headerOpItems extends Model
{
    /**
     * @description The request or response.
     *
     * @example Response
     *
     * @var string
     */
    public $directionType;

    /**
     * @description The header key.
     *
     * @example debug
     *
     * @var string
     */
    public $key;

    /**
     * @description The operation type.
     *
     * @example Add
     *
     * @var string
     */
    public $opType;

    /**
     * @description The header value.
     *
     * @example test
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return headerOpItems
     */
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
