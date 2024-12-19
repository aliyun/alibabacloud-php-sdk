<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBClusterServerlessConfResponseBody extends Model
{
    /**
     * @var string
     */
    public $agileScaleMax;

    /**
     * @description Whether to enable idle shutdown. Values:
     *
     * - **true**: Enable
     *
     * - **false**: Disable (default)
     * @example true
     *
     * @var string
     */
    public $allowShutDown;

    /**
     * @description Serverless cluster ID.
     *
     * @example pc-bp10gr51qasnl****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description Request ID.
     *
     * @example 5E71541A-6007-4DCC-A38A-F872C31FEB45
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Maximum limit for the number of read-only column storage nodes. Range: 0~7.
     *
     * @example 1
     *
     * @var string
     */
    public $scaleApRoNumMax;

    /**
     * @description Minimum limit for the number of read-only column storage nodes. Range: 0~7.
     *
     * @example 1
     *
     * @var string
     */
    public $scaleApRoNumMin;

    /**
     * @description Maximum scaling limit for a single node. Range: 1 PCU~32 PCU.
     *
     * @example 3
     *
     * @var string
     */
    public $scaleMax;

    /**
     * @description Minimum scaling limit for a single node. Range: 1 PCU~31 PCU.
     *
     * @example 1
     *
     * @var string
     */
    public $scaleMin;

    /**
     * @description Maximum scaling limit for the number of read-only nodes. Range: 0~15.
     *
     * @example 4
     *
     * @var string
     */
    public $scaleRoNumMax;

    /**
     * @description Minimum scaling limit for the number of read-only nodes. Range: 0~15.
     *
     * @example 2
     *
     * @var string
     */
    public $scaleRoNumMin;

    /**
     * @description Detection duration for idle shutdown. Range: 300~86,400. Unit: seconds. The detection duration must be a multiple of 300 seconds.
     *
     * @example 10
     *
     * @var string
     */
    public $secondsUntilAutoPause;

    /**
     * @description CPU upscale threshold.
     *
     * @example 60
     *
     * @var string
     */
    public $serverlessRuleCpuEnlargeThreshold;

    /**
     * @description CPU downscale threshold.
     *
     * @example 30
     *
     * @var string
     */
    public $serverlessRuleCpuShrinkThreshold;

    /**
     * @description Elasticity sensitivity. Values:
     *
     * - flexible: Sensitive
     * @example normal
     *
     * @var string
     */
    public $serverlessRuleMode;

    /**
     * @description Whether steady state is enabled. Values:
     *
     * 0: Disabled
     * @example 1
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DescribeDBClusterServerlessConfResponseBody
     */
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
