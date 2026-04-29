<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudMonitorTaskResponseBody\data;

use AlibabaCloud\Dara\Model;

class channelInfo extends Model
{
    /**
     * @var int
     */
    public $answerCount;

    /**
     * @var int
     */
    public $bridgedCount;

    /**
     * @var int
     */
    public $channelCount;

    /**
     * @var int
     */
    public $enterpriseChannelCount;

    /**
     * @var int
     */
    public $ivrCount;

    /**
     * @var int
     */
    public $waitAgentCount;

    /**
     * @var int
     */
    public $waitAnswerCount;
    protected $_name = [
        'answerCount' => 'AnswerCount',
        'bridgedCount' => 'BridgedCount',
        'channelCount' => 'ChannelCount',
        'enterpriseChannelCount' => 'EnterpriseChannelCount',
        'ivrCount' => 'IvrCount',
        'waitAgentCount' => 'WaitAgentCount',
        'waitAnswerCount' => 'WaitAnswerCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->answerCount) {
            $res['AnswerCount'] = $this->answerCount;
        }

        if (null !== $this->bridgedCount) {
            $res['BridgedCount'] = $this->bridgedCount;
        }

        if (null !== $this->channelCount) {
            $res['ChannelCount'] = $this->channelCount;
        }

        if (null !== $this->enterpriseChannelCount) {
            $res['EnterpriseChannelCount'] = $this->enterpriseChannelCount;
        }

        if (null !== $this->ivrCount) {
            $res['IvrCount'] = $this->ivrCount;
        }

        if (null !== $this->waitAgentCount) {
            $res['WaitAgentCount'] = $this->waitAgentCount;
        }

        if (null !== $this->waitAnswerCount) {
            $res['WaitAnswerCount'] = $this->waitAnswerCount;
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
        if (isset($map['AnswerCount'])) {
            $model->answerCount = $map['AnswerCount'];
        }

        if (isset($map['BridgedCount'])) {
            $model->bridgedCount = $map['BridgedCount'];
        }

        if (isset($map['ChannelCount'])) {
            $model->channelCount = $map['ChannelCount'];
        }

        if (isset($map['EnterpriseChannelCount'])) {
            $model->enterpriseChannelCount = $map['EnterpriseChannelCount'];
        }

        if (isset($map['IvrCount'])) {
            $model->ivrCount = $map['IvrCount'];
        }

        if (isset($map['WaitAgentCount'])) {
            $model->waitAgentCount = $map['WaitAgentCount'];
        }

        if (isset($map['WaitAnswerCount'])) {
            $model->waitAnswerCount = $map['WaitAnswerCount'];
        }

        return $model;
    }
}
