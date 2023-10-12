<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayRouteDetailResponseBody\data\routePredicates;

use AlibabaCloud\Tea\Model;

class headerPredicates extends Model
{
    /**
     * @description The key of the request header.
     *
     * @example id
     *
     * @var string
     */
    public $key;

    /**
     * @description The route type.
     *
     * @example PRE
     *
     * @var string
     */
    public $type;

    /**
     * @description The value of the request header.
     *
     * @example 200
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key'   => 'Key',
        'type'  => 'Type',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

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
     * @return headerPredicates
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
