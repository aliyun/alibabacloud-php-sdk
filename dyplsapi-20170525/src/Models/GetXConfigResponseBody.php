<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models;

use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\GetXConfigResponseBody\sequenceCalls;
use AlibabaCloud\Tea\Model;

class GetXConfigResponseBody extends Model
{
    /**
     * @example 0
     *
     * @var string
     */
    public $accessDeniedDetail;

    /**
     * @description 开/关呼叫能力状态： ‘0’：禁用； ‘1’：开启；
     *
     * @example 0
     *
     * @var string
     */
    public $callAbility;

    /**
     * @description 返回状态码 0000表示成功 其他表示失败
     *
     * @example 0000
     *
     * @var string
     */
    public $code;

    /**
     * @description 是否透传来显为真实主叫： 00-非透传：互相拨打时都显示工作号; 10-透传：A客户为主叫时,B员工的来显为客户A号码;B员工为主叫时,A客户的来显为工作号; 默认为 00
     *
     * @example 10
     *
     * @var string
     */
    public $GNFlag;

    /**
     * @description 返回信息
     *
     * @example 成功
     *
     * @var string
     */
    public $message;

    /**
     * @description 顺振控制参数
     *
     * @var sequenceCalls[]
     */
    public $sequenceCalls;

    /**
     * @description 顺振模式： 0-不顺振（默认） 1-有条件顺振，先接续calledNo指定被叫，如果该被叫未能接通，再顺振sequenceCalls号码列表 2-无条件顺振，不接续calledNo指定被叫，直接顺振sequenceCalls号码列表
     *
     * @example 0
     *
     * @var string
     */
    public $sequenceMode;

    /**
     * @description 开/关短信功能状态： ‘0’：禁用；‘1’：开启；
     *
     * @example 0
     *
     * @var string
     */
    public $smsAbility;

    /**
     * @description 是否透传来显为真实用户 0：不透传; 1：透传 默认：0不透传
     *
     * @example 0
     *
     * @var string
     */
    public $smsSignMode;

    /**
     * @description 返回是否成功 true  表示成功 false表示失败
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description X号码
     *
     * @example 17*******22
     *
     * @var string
     */
    public $telX;
    protected $_name = [
        'accessDeniedDetail' => 'AccessDeniedDetail',
        'callAbility'        => 'CallAbility',
        'code'               => 'Code',
        'GNFlag'             => 'GNFlag',
        'message'            => 'Message',
        'sequenceCalls'      => 'SequenceCalls',
        'sequenceMode'       => 'SequenceMode',
        'smsAbility'         => 'SmsAbility',
        'smsSignMode'        => 'SmsSignMode',
        'success'            => 'Success',
        'telX'               => 'TelX',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessDeniedDetail) {
            $res['AccessDeniedDetail'] = $this->accessDeniedDetail;
        }
        if (null !== $this->callAbility) {
            $res['CallAbility'] = $this->callAbility;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->GNFlag) {
            $res['GNFlag'] = $this->GNFlag;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
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
        if (null !== $this->sequenceMode) {
            $res['SequenceMode'] = $this->sequenceMode;
        }
        if (null !== $this->smsAbility) {
            $res['SmsAbility'] = $this->smsAbility;
        }
        if (null !== $this->smsSignMode) {
            $res['SmsSignMode'] = $this->smsSignMode;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->telX) {
            $res['TelX'] = $this->telX;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetXConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessDeniedDetail'])) {
            $model->accessDeniedDetail = $map['AccessDeniedDetail'];
        }
        if (isset($map['CallAbility'])) {
            $model->callAbility = $map['CallAbility'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['GNFlag'])) {
            $model->GNFlag = $map['GNFlag'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
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
        if (isset($map['SequenceMode'])) {
            $model->sequenceMode = $map['SequenceMode'];
        }
        if (isset($map['SmsAbility'])) {
            $model->smsAbility = $map['SmsAbility'];
        }
        if (isset($map['SmsSignMode'])) {
            $model->smsSignMode = $map['SmsSignMode'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TelX'])) {
            $model->telX = $map['TelX'];
        }

        return $model;
    }
}
