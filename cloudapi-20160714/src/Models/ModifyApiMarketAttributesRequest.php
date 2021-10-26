<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class ModifyApiMarketAttributesRequest extends Model
{
    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $apiId;

    /**
     * @var bool
     */
    public $needCharging;

    /**
     * @var string
     */
    public $marketChargingMode;
    protected $_name = [
        'securityToken'      => 'SecurityToken',
        'groupId'            => 'GroupId',
        'apiId'              => 'ApiId',
        'needCharging'       => 'NeedCharging',
        'marketChargingMode' => 'MarketChargingMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->needCharging) {
            $res['NeedCharging'] = $this->needCharging;
        }
        if (null !== $this->marketChargingMode) {
            $res['MarketChargingMode'] = $this->marketChargingMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyApiMarketAttributesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['NeedCharging'])) {
            $model->needCharging = $map['NeedCharging'];
        }
        if (isset($map['MarketChargingMode'])) {
            $model->marketChargingMode = $map['MarketChargingMode'];
        }

        return $model;
    }
}
