<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\GetXConfigResponseBody;

use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\GetXConfigResponseBody\data\reachJsons;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\GetXConfigResponseBody\data\sequenceCalls;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 开/关呼叫能力状态： ‘0’：禁用； ‘1’：开启；
     *
     * @example 0
     *
     * @var string
     */
    public $callAbility;

    /**
     * @description 是否透传来显为真实主叫： 00-非透传：互相拨打时都显示工作号; 10-透传：A客户为主叫时,B员工的来显为客户A号码;B员工为主叫时,A客户的来显为工作号; 默认为 00
     *
     * @example 00
     *
     * @var string
     */
    public $GNFlag;

    /**
     * @description 企业名片规则控制参数
     *
     * @var reachJsons[]
     */
    public $reachJsons;

    /**
     * @description 顺振控制参数
     *
     * @var sequenceCalls[]
     */
    public $sequenceCalls;

    /**
     * @description 顺振结束时间 格式：HH:mm:ss 18:00:00
     *
     * @example 09:00:00
     *
     * @var string
     */
    public $sequenceEndTime;

    /**
     * @description 顺振开启时间 格式：HH:mm:ss 09:00:00
     *
     * @example 09:00:00
     *
     * @var string
     */
    public $sequenceStartTime;

    /**
     * @description 开/关短信功能状态： ‘0’：禁用； ‘1’：开启；
     *
     * @example 0
     *
     * @var string
     */
    public $smsAbility;

    /**
     * @description 是否透传来显为真实主叫： 00-非透传：互相拨打时都显示工作号; 10-透传：A客户为主叫时,B员工的来显为客户A号码;B员工为主叫时,A客户的来显为工作号; 默认为 00
     *
     * @example 0
     *
     * @var string
     */
    public $smsSignMode;
    protected $_name = [
        'callAbility'       => 'CallAbility',
        'GNFlag'            => 'GNFlag',
        'reachJsons'        => 'ReachJsons',
        'sequenceCalls'     => 'SequenceCalls',
        'sequenceEndTime'   => 'SequenceEndTime',
        'sequenceStartTime' => 'SequenceStartTime',
        'smsAbility'        => 'SmsAbility',
        'smsSignMode'       => 'SmsSignMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callAbility) {
            $res['CallAbility'] = $this->callAbility;
        }
        if (null !== $this->GNFlag) {
            $res['GNFlag'] = $this->GNFlag;
        }
        if (null !== $this->reachJsons) {
            $res['ReachJsons'] = [];
            if (null !== $this->reachJsons && \is_array($this->reachJsons)) {
                $n = 0;
                foreach ($this->reachJsons as $item) {
                    $res['ReachJsons'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sequenceCalls) {
            $res['SequenceCalls'] = [];
            if (null !== $this->sequenceCalls && \is_array($this->sequenceCalls)) {
                $n = 0;
                foreach ($this->sequenceCalls as $item) {
                    $res['SequenceCalls'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sequenceEndTime) {
            $res['SequenceEndTime'] = $this->sequenceEndTime;
        }
        if (null !== $this->sequenceStartTime) {
            $res['SequenceStartTime'] = $this->sequenceStartTime;
        }
        if (null !== $this->smsAbility) {
            $res['SmsAbility'] = $this->smsAbility;
        }
        if (null !== $this->smsSignMode) {
            $res['SmsSignMode'] = $this->smsSignMode;
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
        if (isset($map['CallAbility'])) {
            $model->callAbility = $map['CallAbility'];
        }
        if (isset($map['GNFlag'])) {
            $model->GNFlag = $map['GNFlag'];
        }
        if (isset($map['ReachJsons'])) {
            if (!empty($map['ReachJsons'])) {
                $model->reachJsons = [];
                $n                 = 0;
                foreach ($map['ReachJsons'] as $item) {
                    $model->reachJsons[$n++] = null !== $item ? reachJsons::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SequenceCalls'])) {
            if (!empty($map['SequenceCalls'])) {
                $model->sequenceCalls = [];
                $n                    = 0;
                foreach ($map['SequenceCalls'] as $item) {
                    $model->sequenceCalls[$n++] = null !== $item ? sequenceCalls::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SequenceEndTime'])) {
            $model->sequenceEndTime = $map['SequenceEndTime'];
        }
        if (isset($map['SequenceStartTime'])) {
            $model->sequenceStartTime = $map['SequenceStartTime'];
        }
        if (isset($map['SmsAbility'])) {
            $model->smsAbility = $map['SmsAbility'];
        }
        if (isset($map['SmsSignMode'])) {
            $model->smsSignMode = $map['SmsSignMode'];
        }

        return $model;
    }
}
