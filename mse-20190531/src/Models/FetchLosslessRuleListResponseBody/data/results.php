<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\FetchLosslessRuleListResponseBody\data;

use AlibabaCloud\Dara\Model;

class results extends Model
{
    /**
     * @var bool
     */
    public $aligned;
    /**
     * @var string
     */
    public $appId;
    /**
     * @var string
     */
    public $appName;
    /**
     * @var int
     */
    public $count;
    /**
     * @var int
     */
    public $delayTime;
    /**
     * @var bool
     */
    public $enable;
    /**
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
     * @var bool
     */
    public $related;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
