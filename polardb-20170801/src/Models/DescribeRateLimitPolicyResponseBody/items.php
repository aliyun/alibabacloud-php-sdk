<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeRateLimitPolicyResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var string
     */
    public $gmtModified;

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
    public $policyType;

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
    public $scopeRefId;

    /**
     * @var string
     */
    public $scopeType;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'gmtCreated' => 'GmtCreated',
        'gmtModified' => 'GmtModified',
        'gwClusterId' => 'GwClusterId',
        'policyId' => 'PolicyId',
        'policyType' => 'PolicyType',
        'rateLimitRpm' => 'RateLimitRpm',
        'rateLimitTpm' => 'RateLimitTpm',
        'scopeRefId' => 'ScopeRefId',
        'scopeType' => 'ScopeType',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->gwClusterId) {
            $res['GwClusterId'] = $this->gwClusterId;
        }

        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }

        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
        }

        if (null !== $this->rateLimitRpm) {
            $res['RateLimitRpm'] = $this->rateLimitRpm;
        }

        if (null !== $this->rateLimitTpm) {
            $res['RateLimitTpm'] = $this->rateLimitTpm;
        }

        if (null !== $this->scopeRefId) {
            $res['ScopeRefId'] = $this->scopeRefId;
        }

        if (null !== $this->scopeType) {
            $res['ScopeType'] = $this->scopeType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['GwClusterId'])) {
            $model->gwClusterId = $map['GwClusterId'];
        }

        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }

        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }

        if (isset($map['RateLimitRpm'])) {
            $model->rateLimitRpm = $map['RateLimitRpm'];
        }

        if (isset($map['RateLimitTpm'])) {
            $model->rateLimitTpm = $map['RateLimitTpm'];
        }

        if (isset($map['ScopeRefId'])) {
            $model->scopeRefId = $map['ScopeRefId'];
        }

        if (isset($map['ScopeType'])) {
            $model->scopeType = $map['ScopeType'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
