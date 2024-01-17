<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160201\Models;

use AlibabaCloud\Tea\Model;

class CreateInstanceRequest extends Model
{
    /**
     * @var int
     */
    public $accountQuantity;

    /**
     * @var int
     */
    public $alarmQuota;

    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var int
     */
    public $appId;

    /**
     * @var string
     */
    public $billingType;

    /**
     * @var string
     */
    public $cloudMarketInstanceId;

    /**
     * @var string
     */
    public $expiredOn;

    /**
     * @var string
     */
    public $instanceAttributes;

    /**
     * @var string
     */
    public $skuId;

    /**
     * @var string
     */
    public $token;
    protected $_name = [
        'accountQuantity'       => 'AccountQuantity',
        'alarmQuota'            => 'AlarmQuota',
        'aliUid'                => 'AliUid',
        'appId'                 => 'AppId',
        'billingType'           => 'BillingType',
        'cloudMarketInstanceId' => 'CloudMarketInstanceId',
        'expiredOn'             => 'ExpiredOn',
        'instanceAttributes'    => 'InstanceAttributes',
        'skuId'                 => 'SkuId',
        'token'                 => 'Token',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountQuantity) {
            $res['AccountQuantity'] = $this->accountQuantity;
        }
        if (null !== $this->alarmQuota) {
            $res['AlarmQuota'] = $this->alarmQuota;
        }
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->billingType) {
            $res['BillingType'] = $this->billingType;
        }
        if (null !== $this->cloudMarketInstanceId) {
            $res['CloudMarketInstanceId'] = $this->cloudMarketInstanceId;
        }
        if (null !== $this->expiredOn) {
            $res['ExpiredOn'] = $this->expiredOn;
        }
        if (null !== $this->instanceAttributes) {
            $res['InstanceAttributes'] = $this->instanceAttributes;
        }
        if (null !== $this->skuId) {
            $res['SkuId'] = $this->skuId;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountQuantity'])) {
            $model->accountQuantity = $map['AccountQuantity'];
        }
        if (isset($map['AlarmQuota'])) {
            $model->alarmQuota = $map['AlarmQuota'];
        }
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['BillingType'])) {
            $model->billingType = $map['BillingType'];
        }
        if (isset($map['CloudMarketInstanceId'])) {
            $model->cloudMarketInstanceId = $map['CloudMarketInstanceId'];
        }
        if (isset($map['ExpiredOn'])) {
            $model->expiredOn = $map['ExpiredOn'];
        }
        if (isset($map['InstanceAttributes'])) {
            $model->instanceAttributes = $map['InstanceAttributes'];
        }
        if (isset($map['SkuId'])) {
            $model->skuId = $map['SkuId'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}
