<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class CreateRateLimitPolicyRequest extends Model
{
    /**
     * @var string
     */
    public $gwClusterId;

    /**
     * @var string
     */
    public $rateLimitRpm;

    /**
     * @var string
     */
    public $rateLimitTpm;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $scopeRefId;

    /**
     * @var string
     */
    public $scopeType;
    protected $_name = [
        'gwClusterId' => 'GwClusterId',
        'rateLimitRpm' => 'RateLimitRpm',
        'rateLimitTpm' => 'RateLimitTpm',
        'regionId' => 'RegionId',
        'scopeRefId' => 'ScopeRefId',
        'scopeType' => 'ScopeType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gwClusterId) {
            $res['GwClusterId'] = $this->gwClusterId;
        }

        if (null !== $this->rateLimitRpm) {
            $res['RateLimitRpm'] = $this->rateLimitRpm;
        }

        if (null !== $this->rateLimitTpm) {
            $res['RateLimitTpm'] = $this->rateLimitTpm;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->scopeRefId) {
            $res['ScopeRefId'] = $this->scopeRefId;
        }

        if (null !== $this->scopeType) {
            $res['ScopeType'] = $this->scopeType;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GwClusterId'])) {
            $model->gwClusterId = $map['GwClusterId'];
        }

        if (isset($map['RateLimitRpm'])) {
            $model->rateLimitRpm = $map['RateLimitRpm'];
        }

        if (isset($map['RateLimitTpm'])) {
            $model->rateLimitTpm = $map['RateLimitTpm'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ScopeRefId'])) {
            $model->scopeRefId = $map['ScopeRefId'];
        }

        if (isset($map['ScopeType'])) {
            $model->scopeType = $map['ScopeType'];
        }

        return $model;
    }
}
