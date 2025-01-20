<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class DescribeDBClusterServerlessConfResponseBody extends Model
{
    /**
     * @var string
     */
    public $agileScaleMax;
    /**
     * @var string
     */
    public $allowShutDown;
    /**
     * @var string
     */
    public $DBClusterId;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $scaleApRoNumMax;
    /**
     * @var string
     */
    public $scaleApRoNumMin;
    /**
     * @var string
     */
    public $scaleMax;
    /**
     * @var string
     */
    public $scaleMin;
    /**
     * @var string
     */
    public $scaleRoNumMax;
    /**
     * @var string
     */
    public $scaleRoNumMin;
    /**
     * @var string
     */
    public $secondsUntilAutoPause;
    /**
     * @var string
     */
    public $serverlessRuleCpuEnlargeThreshold;
    /**
     * @var string
     */
    public $serverlessRuleCpuShrinkThreshold;
    /**
     * @var string
     */
    public $serverlessRuleMode;
    /**
     * @var string
     */
    public $switchs;
    /**
     * @var string
     */
    public $traditionalScaleMaxThreshold;
    protected $_name = [
        'agileScaleMax'                     => 'AgileScaleMax',
        'allowShutDown'                     => 'AllowShutDown',
        'DBClusterId'                       => 'DBClusterId',
        'requestId'                         => 'RequestId',
        'scaleApRoNumMax'                   => 'ScaleApRoNumMax',
        'scaleApRoNumMin'                   => 'ScaleApRoNumMin',
        'scaleMax'                          => 'ScaleMax',
        'scaleMin'                          => 'ScaleMin',
        'scaleRoNumMax'                     => 'ScaleRoNumMax',
        'scaleRoNumMin'                     => 'ScaleRoNumMin',
        'secondsUntilAutoPause'             => 'SecondsUntilAutoPause',
        'serverlessRuleCpuEnlargeThreshold' => 'ServerlessRuleCpuEnlargeThreshold',
        'serverlessRuleCpuShrinkThreshold'  => 'ServerlessRuleCpuShrinkThreshold',
        'serverlessRuleMode'                => 'ServerlessRuleMode',
        'switchs'                           => 'Switchs',
        'traditionalScaleMaxThreshold'      => 'TraditionalScaleMaxThreshold',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agileScaleMax) {
            $res['AgileScaleMax'] = $this->agileScaleMax;
        }

        if (null !== $this->allowShutDown) {
            $res['AllowShutDown'] = $this->allowShutDown;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->scaleApRoNumMax) {
            $res['ScaleApRoNumMax'] = $this->scaleApRoNumMax;
        }

        if (null !== $this->scaleApRoNumMin) {
            $res['ScaleApRoNumMin'] = $this->scaleApRoNumMin;
        }

        if (null !== $this->scaleMax) {
            $res['ScaleMax'] = $this->scaleMax;
        }

        if (null !== $this->scaleMin) {
            $res['ScaleMin'] = $this->scaleMin;
        }

        if (null !== $this->scaleRoNumMax) {
            $res['ScaleRoNumMax'] = $this->scaleRoNumMax;
        }

        if (null !== $this->scaleRoNumMin) {
            $res['ScaleRoNumMin'] = $this->scaleRoNumMin;
        }

        if (null !== $this->secondsUntilAutoPause) {
            $res['SecondsUntilAutoPause'] = $this->secondsUntilAutoPause;
        }

        if (null !== $this->serverlessRuleCpuEnlargeThreshold) {
            $res['ServerlessRuleCpuEnlargeThreshold'] = $this->serverlessRuleCpuEnlargeThreshold;
        }

        if (null !== $this->serverlessRuleCpuShrinkThreshold) {
            $res['ServerlessRuleCpuShrinkThreshold'] = $this->serverlessRuleCpuShrinkThreshold;
        }

        if (null !== $this->serverlessRuleMode) {
            $res['ServerlessRuleMode'] = $this->serverlessRuleMode;
        }

        if (null !== $this->switchs) {
            $res['Switchs'] = $this->switchs;
        }

        if (null !== $this->traditionalScaleMaxThreshold) {
            $res['TraditionalScaleMaxThreshold'] = $this->traditionalScaleMaxThreshold;
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
        if (isset($map['AgileScaleMax'])) {
            $model->agileScaleMax = $map['AgileScaleMax'];
        }

        if (isset($map['AllowShutDown'])) {
            $model->allowShutDown = $map['AllowShutDown'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ScaleApRoNumMax'])) {
            $model->scaleApRoNumMax = $map['ScaleApRoNumMax'];
        }

        if (isset($map['ScaleApRoNumMin'])) {
            $model->scaleApRoNumMin = $map['ScaleApRoNumMin'];
        }

        if (isset($map['ScaleMax'])) {
            $model->scaleMax = $map['ScaleMax'];
        }

        if (isset($map['ScaleMin'])) {
            $model->scaleMin = $map['ScaleMin'];
        }

        if (isset($map['ScaleRoNumMax'])) {
            $model->scaleRoNumMax = $map['ScaleRoNumMax'];
        }

        if (isset($map['ScaleRoNumMin'])) {
            $model->scaleRoNumMin = $map['ScaleRoNumMin'];
        }

        if (isset($map['SecondsUntilAutoPause'])) {
            $model->secondsUntilAutoPause = $map['SecondsUntilAutoPause'];
        }

        if (isset($map['ServerlessRuleCpuEnlargeThreshold'])) {
            $model->serverlessRuleCpuEnlargeThreshold = $map['ServerlessRuleCpuEnlargeThreshold'];
        }

        if (isset($map['ServerlessRuleCpuShrinkThreshold'])) {
            $model->serverlessRuleCpuShrinkThreshold = $map['ServerlessRuleCpuShrinkThreshold'];
        }

        if (isset($map['ServerlessRuleMode'])) {
            $model->serverlessRuleMode = $map['ServerlessRuleMode'];
        }

        if (isset($map['Switchs'])) {
            $model->switchs = $map['Switchs'];
        }

        if (isset($map['TraditionalScaleMaxThreshold'])) {
            $model->traditionalScaleMaxThreshold = $map['TraditionalScaleMaxThreshold'];
        }

        return $model;
    }
}
