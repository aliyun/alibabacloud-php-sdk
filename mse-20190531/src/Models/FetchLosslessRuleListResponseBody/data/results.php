<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\FetchLosslessRuleListResponseBody\data;

use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $aligned;

    /**
     * @example hkhon1po62@24810bf4364aea1
     *
     * @var string
     */
    public $appId;

    /**
     * @example echo-demo
     *
     * @var string
     */
    public $appName;

    /**
     * @example 3
     *
     * @var int
     */
    public $count;

    /**
     * @example 60
     *
     * @var int
     */
    public $delayTime;

    /**
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @example 2
     *
     * @var int
     */
    public $funcType;

    /**
     * @example false
     *
     * @var bool
     */
    public $lossLessDetail;

    /**
     * @example true
     *
     * @var bool
     */
    public $notice;

    /**
     * @example false
     *
     * @var bool
     */
    public $related;

    /**
     * @example 0
     *
     * @var int
     */
    public $shutdownWaitSeconds;

    /**
     * @example 60
     *
     * @var int
     */
    public $warmupTime;
    protected $_name = [
        'aligned'             => 'Aligned',
        'appId'               => 'AppId',
        'appName'             => 'AppName',
        'count'               => 'Count',
        'delayTime'           => 'DelayTime',
        'enable'              => 'Enable',
        'funcType'            => 'FuncType',
        'lossLessDetail'      => 'LossLessDetail',
        'notice'              => 'Notice',
        'related'             => 'Related',
        'shutdownWaitSeconds' => 'ShutdownWaitSeconds',
        'warmupTime'          => 'WarmupTime',
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
        if (null !== $this->shutdownWaitSeconds) {
            $res['ShutdownWaitSeconds'] = $this->shutdownWaitSeconds;
        }
        if (null !== $this->warmupTime) {
            $res['WarmupTime'] = $this->warmupTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return results
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
        if (isset($map['ShutdownWaitSeconds'])) {
            $model->shutdownWaitSeconds = $map['ShutdownWaitSeconds'];
        }
        if (isset($map['WarmupTime'])) {
            $model->warmupTime = $map['WarmupTime'];
        }

        return $model;
    }
}
