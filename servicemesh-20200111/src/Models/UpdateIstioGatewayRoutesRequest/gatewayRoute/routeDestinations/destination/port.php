<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateIstioGatewayRoutesRequest\gatewayRoute\routeDestinations\destination;

use AlibabaCloud\Tea\Model;

class port extends Model
{
    /**
     * @description The port number.
     *
     * @example 80
     *
     * @var int
     */
    public $number;
    protected $_name = [
        'number' => 'Number',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return port
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }

        return $model;
    }
}
