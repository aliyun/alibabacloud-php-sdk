<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\GetXDefaultConfigResponseBody;

use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\GetXDefaultConfigResponseBody\data\reachJson;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\GetXDefaultConfigResponseBody\data\sequenceCall;
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
     * @var reachJson[]
     */
    public $reachJson;

    /**
     * @description 顺振控制参数
     *
     * @var sequenceCall[]
     */
    public $sequenceCall;

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
        'reachJson'         => 'ReachJson',
        'sequenceCall'      => 'SequenceCall',
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
        if (null !== $this->reachJson) {
            $res['ReachJson'] = [];
            if (null !== $this->reachJson && \is_array($this->reachJson)) {
                $n = 0;
                foreach ($this->reachJson as $item) {
                    $res['ReachJson'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sequenceCall) {
            $res['SequenceCall'] = [];
            if (null !== $this->sequenceCall && \is_array($this->sequenceCall)) {
                $n = 0;
                foreach ($this->sequenceCall as $item) {
                    $res['SequenceCall'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['ReachJson'])) {
            if (!empty($map['ReachJson'])) {
                $model->reachJson = [];
                $n                = 0;
                foreach ($map['ReachJson'] as $item) {
                    $model->reachJson[$n++] = null !== $item ? reachJson::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SequenceCall'])) {
            if (!empty($map['SequenceCall'])) {
                $model->sequenceCall = [];
                $n                   = 0;
                foreach ($map['SequenceCall'] as $item) {
                    $model->sequenceCall[$n++] = null !== $item ? sequenceCall::fromMap($item) : $item;
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
