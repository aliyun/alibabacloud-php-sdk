<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class ModifyRateLimitPolicyRequest extends Model
{
    /**
     * @var string
     */
    public $gwClusterId;

    /**
     * @var string
     */
    public $policyId;

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
    protected $_name = [
        'gwClusterId' => 'GwClusterId',
        'policyId' => 'PolicyId',
        'rateLimitRpm' => 'RateLimitRpm',
        'rateLimitTpm' => 'RateLimitTpm',
        'regionId' => 'RegionId',
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

        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
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

        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
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

        return $model;
    }
}
