<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class ReportGatewayUsageRequest extends Model
{
    /**
     * @example 28c07861-a93b-4aa2-ae3a-3f7b7e7f6184
     *
     * @var string
     */
    public $clientUUID;

    /**
     * @example gw-1234567890abcd
     *
     * @var string
     */
    public $gatewayId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @example {"VolumeCount":5,"NfsCount":2,"CacheCapacity":123456789000,"CifsCount":3}
     *
     * @var string
     */
    public $usage;
    protected $_name = [
        'clientUUID'    => 'ClientUUID',
        'gatewayId'     => 'GatewayId',
        'securityToken' => 'SecurityToken',
        'usage'         => 'Usage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientUUID) {
            $res['ClientUUID'] = $this->clientUUID;
        }
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->usage) {
            $res['Usage'] = $this->usage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReportGatewayUsageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientUUID'])) {
            $model->clientUUID = $map['ClientUUID'];
        }
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['Usage'])) {
            $model->usage = $map['Usage'];
        }

        return $model;
    }
}
