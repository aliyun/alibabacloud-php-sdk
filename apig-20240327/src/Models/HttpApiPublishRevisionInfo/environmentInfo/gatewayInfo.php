<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiPublishRevisionInfo\environmentInfo;

use AlibabaCloud\Tea\Model;

class gatewayInfo extends Model
{
    /**
     * @example gw-xxx
     *
     * @var string
     */
    public $gatewayId;

    /**
     * @example 实例1
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'gatewayId' => 'gatewayId',
        'name' => 'name',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return gatewayInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
