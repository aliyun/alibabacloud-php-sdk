<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetLosslessRuleByAppResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Indicates whether service registration is complete before readiness probe.
     *
     * @example true
     *
     * @var bool
     */
    public $aligned;

    /**
     * @description The ID of the application.
     *
     * @example hkhon1po62@24810bf4364a***
     *
     * @var string
     */
    public $appId;

    /**
     * @description The name of the application.
     *
     * @example spring-cloud-a
     *
     * @var string
     */
    public $appName;

    /**
     * @description The number of instances.
     *
     * @example 1
     *
     * @var int
     */
    public $count;

    /**
     * @description The registration latency. Unit: seconds.
     *
     * @example 60
     *
     * @var int
     */
    public $delayTime;

    /**
     * @description Indicates whether graceful start is enabled. Valid values:
     *
     *   `true`: enabled
     *   `false`: disabled
     *
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @description The slope of the prefetching curve.
     *
     * @example 2
     *
     * @var int
     */
    public $funcType;

    /**
     * @description Indicates whether online and offline processing details are displayed.
     *
     * @example true
     *
     * @var bool
     */
    public $lossLessDetail;

    /**
     * @description Indicates whether notification is enabled.
     *
     * @example false
     *
     * @var bool
     */
    public $notice;

    /**
     * @description Indicates whether service prefetching is complete before readiness probe.
     *
     * @example false
     *
     * @var bool
     */
    public $related;

    /**
     * @description The prefetching duration. Unit: seconds.
     *
     * @example 120
     *
     * @var int
     */
    public $warmupTime;
    protected $_name = [
        'aligned'        => 'Aligned',
        'appId'          => 'AppId',
        'appName'        => 'AppName',
        'count'          => 'Count',
        'delayTime'      => 'DelayTime',
        'enable'         => 'Enable',
        'funcType'       => 'FuncType',
        'lossLessDetail' => 'LossLessDetail',
        'notice'         => 'Notice',
        'related'        => 'Related',
        'warmupTime'     => 'WarmupTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aligned) {
            $res['Aligned'] = $this->aligned;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
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
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Aligned'])) {
            $model->aligned = $map['Aligned'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
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
        if (isset($map['Related'])) {
            $model->related = $map['Related'];
        }
        if (isset($map['WarmupTime'])) {
            $model->warmupTime = $map['WarmupTime'];
        }

        return $model;
    }
}
