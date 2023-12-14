<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class DeleteGatewayRequest extends Model
{
    /**
     * @example gw-0001xv7je3580031y***
     *
     * @var string
     */
    public $gatewayId;

    /**
     * @example ""
     *
     * @var string
     */
    public $reasonDetail;

    /**
     * @example REASON2
     *
     * @var string
     */
    public $reasonType;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'gatewayId'     => 'GatewayId',
        'reasonDetail'  => 'ReasonDetail',
        'reasonType'    => 'ReasonType',
        'securityToken' => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->reasonDetail) {
            $res['ReasonDetail'] = $this->reasonDetail;
        }
        if (null !== $this->reasonType) {
            $res['ReasonType'] = $this->reasonType;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteGatewayRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['ReasonDetail'])) {
            $model->reasonDetail = $map['ReasonDetail'];
        }
        if (isset($map['ReasonType'])) {
            $model->reasonType = $map['ReasonType'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
