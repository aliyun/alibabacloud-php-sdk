<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class ModifyLosslessRuleRequest extends Model
{
    /**
     * @description The language of the response. Valid values:
     *
     *   zh: Chinese
     *   en: English
     *
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description Specifies whether to align the lifecycle of the application in the Kubernetes cluster with that of the microservice.
     *
     * @example true
     *
     * @var bool
     */
    public $aligned;

    /**
     * @description The ID of the application.
     *
     * @example c644n5frmc@3e75f25fd4*****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The name of the application.
     *
     * @example wx-work-api
     *
     * @var string
     */
    public $appName;

    /**
     * @description The registration latency.
     *
     * @example 1
     *
     * @var int
     */
    public $delayTime;

    /**
     * @description Specifies whether to enable the alert rule. Valid values:
     *
     *   `true`: enables the rule.
     *   `false`: disables the rule.
     *
     * @example false
     *
     * @var bool
     */
    public $enable;

    /**
     * @description The slope of the prefetching curve.
     *
     * @example 1
     *
     * @var int
     */
    public $funcType;

    /**
     * @var bool
     */
    public $lossLessDetail;

    /**
     * @var bool
     */
    public $notice;

    /**
     * @description The region ID.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Specifies whether to associate readiness probe with service prefetching.
     *
     * @example true
     *
     * @var bool
     */
    public $related;

    /**
     * @description The cooldown duration. Unit: seconds.
     *
     * @example 0
     *
     * @var int
     */
    public $shutdownWaitSeconds;

    /**
     * @description The service source. Valid values:
     *
     * @example edasmsc
     *
     * @var string
     */
    public $source;

    /**
     * @description The prefetching duration.
     *
     * @example 60
     *
     * @var int
     */
    public $warmupTime;
    protected $_name = [
        'acceptLanguage'      => 'AcceptLanguage',
        'aligned'             => 'Aligned',
        'appId'               => 'AppId',
        'appName'             => 'AppName',
        'delayTime'           => 'DelayTime',
        'enable'              => 'Enable',
        'funcType'            => 'FuncType',
        'lossLessDetail'      => 'LossLessDetail',
        'notice'              => 'Notice',
        'regionId'            => 'RegionId',
        'related'             => 'Related',
        'shutdownWaitSeconds' => 'ShutdownWaitSeconds',
        'source'              => 'Source',
        'warmupTime'          => 'WarmupTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->aligned) {
            $res['Aligned'] = $this->aligned;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->delayTime) {
            $res['DelayTime'] = $this->delayTime;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->funcType) {
            $res['FuncType'] = $this->funcType;
        }
        if (null !== $this->lossLessDetail) {
            $res['LossLessDetail'] = $this->lossLessDetail;
        }
        if (null !== $this->notice) {
            $res['Notice'] = $this->notice;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->related) {
            $res['Related'] = $this->related;
        }
        if (null !== $this->shutdownWaitSeconds) {
            $res['ShutdownWaitSeconds'] = $this->shutdownWaitSeconds;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->warmupTime) {
            $res['WarmupTime'] = $this->warmupTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyLosslessRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['Aligned'])) {
            $model->aligned = $map['Aligned'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['DelayTime'])) {
            $model->delayTime = $map['DelayTime'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['FuncType'])) {
            $model->funcType = $map['FuncType'];
        }
        if (isset($map['LossLessDetail'])) {
            $model->lossLessDetail = $map['LossLessDetail'];
        }
        if (isset($map['Notice'])) {
            $model->notice = $map['Notice'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Related'])) {
            $model->related = $map['Related'];
        }
        if (isset($map['ShutdownWaitSeconds'])) {
            $model->shutdownWaitSeconds = $map['ShutdownWaitSeconds'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['WarmupTime'])) {
            $model->warmupTime = $map['WarmupTime'];
        }

        return $model;
    }
}
