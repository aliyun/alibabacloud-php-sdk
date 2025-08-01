<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteWafStatusResponseBody\data\routePredicates;

use AlibabaCloud\Tea\Model;

class queryPredicates extends Model
{
    /**
     * @description The name of the parameter.
     *
     * @example instanceId
     *
     * @var string
     */
    public $key;

    /**
     * @description The type.
     *
     * @example PRE
     *
     * @var string
     */
    public $type;

    /**
     * @description The value of the parameter.
     *
     * @example test
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key' => 'Key',
        'type' => 'Type',
        'value' => 'Value',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return queryPredicates
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
