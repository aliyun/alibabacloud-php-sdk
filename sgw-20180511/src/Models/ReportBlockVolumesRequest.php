<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class ReportBlockVolumesRequest extends Model
{
    /**
     * @var string
     */
    public $clientUUID;

    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var string
     */
    public $info;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'clientUUID'    => 'ClientUUID',
        'gatewayId'     => 'GatewayId',
        'info'          => 'Info',
        'securityToken' => 'SecurityToken',
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
        if (null !== $this->info) {
            $res['Info'] = $this->info;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReportBlockVolumesRequest
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
        if (isset($map['Info'])) {
            $model->info = $map['Info'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
