<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\SDK\APIG\V20240327\Models\GatewayInfo\vpcInfo;
use AlibabaCloud\Tea\Model;

class GatewayInfo extends Model
{
    /**
     * @var string
     */
    public $engineVersion;

    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var vpcInfo
     */
    public $vpcInfo;
    protected $_name = [
        'engineVersion' => 'engineVersion',
        'gatewayId'     => 'gatewayId',
        'name'          => 'name',
        'vpcInfo'       => 'vpcInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->engineVersion) {
            $res['engineVersion'] = $this->engineVersion;
        }
        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->vpcInfo) {
            $res['vpcInfo'] = null !== $this->vpcInfo ? $this->vpcInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GatewayInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['engineVersion'])) {
            $model->engineVersion = $map['engineVersion'];
        }
        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['vpcInfo'])) {
            $model->vpcInfo = vpcInfo::fromMap($map['vpcInfo']);
        }

        return $model;
    }
}
