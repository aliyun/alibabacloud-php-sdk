<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewayQuotaRulesResponseBody\data;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $periodType;

    /**
     * @var string
     */
    public $quotaDimension;

    /**
     * @var int
     */
    public $quotaLimit;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string
     */
    public $ruleStatus;

    /**
     * @var string
     */
    public $timezone;

    /**
     * @var string
     */
    public $windowAlignment;
    protected $_name = [
        'periodType' => 'periodType',
        'quotaDimension' => 'quotaDimension',
        'quotaLimit' => 'quotaLimit',
        'ruleId' => 'ruleId',
        'ruleName' => 'ruleName',
        'ruleStatus' => 'ruleStatus',
        'timezone' => 'timezone',
        'windowAlignment' => 'windowAlignment',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->periodType) {
            $res['periodType'] = $this->periodType;
        }

        if (null !== $this->quotaDimension) {
            $res['quotaDimension'] = $this->quotaDimension;
        }

        if (null !== $this->quotaLimit) {
            $res['quotaLimit'] = $this->quotaLimit;
        }

        if (null !== $this->ruleId) {
            $res['ruleId'] = $this->ruleId;
        }

        if (null !== $this->ruleName) {
            $res['ruleName'] = $this->ruleName;
        }

        if (null !== $this->ruleStatus) {
            $res['ruleStatus'] = $this->ruleStatus;
        }

        if (null !== $this->timezone) {
            $res['timezone'] = $this->timezone;
        }

        if (null !== $this->windowAlignment) {
            $res['windowAlignment'] = $this->windowAlignment;
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
        if (isset($map['periodType'])) {
            $model->periodType = $map['periodType'];
        }

        if (isset($map['quotaDimension'])) {
            $model->quotaDimension = $map['quotaDimension'];
        }

        if (isset($map['quotaLimit'])) {
            $model->quotaLimit = $map['quotaLimit'];
        }

        if (isset($map['ruleId'])) {
            $model->ruleId = $map['ruleId'];
        }

        if (isset($map['ruleName'])) {
            $model->ruleName = $map['ruleName'];
        }

        if (isset($map['ruleStatus'])) {
            $model->ruleStatus = $map['ruleStatus'];
        }

        if (isset($map['timezone'])) {
            $model->timezone = $map['timezone'];
        }

        if (isset($map['windowAlignment'])) {
            $model->windowAlignment = $map['windowAlignment'];
        }

        return $model;
    }
}
