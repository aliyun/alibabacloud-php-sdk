<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class AddTrafficSpecialControlRequest extends Model
{
    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description The ID of the request.
     *
     * @example 3382463
     *
     * @var string
     */
    public $specialKey;

    /**
     * @description The special throttling value.
     *
     * @example APP
     *
     * @var string
     */
    public $specialType;

    /**
     * @description The ID of the app or Alibaba Cloud account. Specify this parameter based on the value of the **SpecialType** parameter. You can view your account ID on the [Account Management](https://account.console.aliyun.com/?spm=a2c4g.11186623.2.15.3f053654YpMPwo#/secure) page.
     *
     * @example tf123456
     *
     * @var string
     */
    public $trafficControlId;

    /**
     * @description *   This API is intended for API providers.
     *   If the input SpecialKey already exists, the previous configuration is overwritten. Use caution when calling this operation.
     *   Special throttling policies must be added to an existing throttling policy, and can take effect on all the APIs to which the throttling policy is bound.
     *
     * @example 10000
     *
     * @var int
     */
    public $trafficValue;
    protected $_name = [
        'securityToken'    => 'SecurityToken',
        'specialKey'       => 'SpecialKey',
        'specialType'      => 'SpecialType',
        'trafficControlId' => 'TrafficControlId',
        'trafficValue'     => 'TrafficValue',
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
        if (null !== $this->specialKey) {
            $res['SpecialKey'] = $this->specialKey;
        }
        if (null !== $this->specialType) {
            $res['SpecialType'] = $this->specialType;
        }
        if (null !== $this->trafficControlId) {
            $res['TrafficControlId'] = $this->trafficControlId;
        }
        if (null !== $this->trafficValue) {
            $res['TrafficValue'] = $this->trafficValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddTrafficSpecialControlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['SpecialKey'])) {
            $model->specialKey = $map['SpecialKey'];
        }
        if (isset($map['SpecialType'])) {
            $model->specialType = $map['SpecialType'];
        }
        if (isset($map['TrafficControlId'])) {
            $model->trafficControlId = $map['TrafficControlId'];
        }
        if (isset($map['TrafficValue'])) {
            $model->trafficValue = $map['TrafficValue'];
        }

        return $model;
    }
}
