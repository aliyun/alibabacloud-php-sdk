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
     * @description The ID of the region.
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
     * @description The microservice namespace to which the rule applies.
     *
     * @example wx-work-api
     *
     * @var string
     */
    public $appName;

    /**
     * @description Specifies whether to enable graceful start. Valid values:
     *
     *   true: enabled
     *   false: disabled
     *
     * @example 1
     *
     * @var int
     */
    public $delayTime;

    /**
     * @description The prefetching duration.
     *
     * @example false
     *
     * @var bool
     */
    public $enable;

    /**
     * @description The registration latency.
     *
     * @example 1
     *
     * @var int
     */
    public $funcType;

    /**
     * @description Specifies whether to display online and offline processing details.
     *
     * @example false
     *
     * @var bool
     */
    public $lossLessDetail;

    /**
     * @description The microservice namespace to which the rule applies.
     *
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @description Specifies whether to enable notification.
     *
     * @example false
     *
     * @var bool
     */
    public $notice;

    /**
     * @description The slope of the prefetching curve.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Specifies whether to complete service registration before readiness probe.
     *
     * @example true
     *
     * @var bool
     */
    public $related;

    /**
     * @description Specifies whether to complete service prefetching before readiness probe.
     *
     * @example 60
     *
     * @var int
     */
    public $warmupTime;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'aligned'        => 'Aligned',
        'appId'          => 'AppId',
        'appName'        => 'AppName',
        'delayTime'      => 'DelayTime',
        'enable'         => 'Enable',
        'funcType'       => 'FuncType',
        'lossLessDetail' => 'LossLessDetail',
        'namespace'      => 'Namespace',
        'notice'         => 'Notice',
        'regionId'       => 'RegionId',
        'related'        => 'Related',
        'warmupTime'     => 'WarmupTime',
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
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
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
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
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
        if (isset($map['WarmupTime'])) {
            $model->warmupTime = $map['WarmupTime'];
        }

        return $model;
    }
}
