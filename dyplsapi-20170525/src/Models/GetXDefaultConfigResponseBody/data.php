<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\GetXDefaultConfigResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\GetXDefaultConfigResponseBody\data\reachJson;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\GetXDefaultConfigResponseBody\data\sequenceCall;

class data extends Model
{
    /**
     * @var string
     */
    public $callAbility;

    /**
     * @var string
     */
    public $GNFlag;

    /**
     * @var reachJson[]
     */
    public $reachJson;

    /**
     * @var sequenceCall[]
     */
    public $sequenceCall;

    /**
     * @var string
     */
    public $sequenceEndTime;

    /**
     * @var string
     */
    public $sequenceStartTime;

    /**
     * @var string
     */
    public $smsAbility;

    /**
     * @var string
     */
    public $smsSignMode;
    protected $_name = [
        'callAbility' => 'CallAbility',
        'GNFlag' => 'GNFlag',
        'reachJson' => 'ReachJson',
        'sequenceCall' => 'SequenceCall',
        'sequenceEndTime' => 'SequenceEndTime',
        'sequenceStartTime' => 'SequenceStartTime',
        'smsAbility' => 'SmsAbility',
        'smsSignMode' => 'SmsSignMode',
    ];

    public function validate()
    {
        if (\is_array($this->reachJson)) {
            Model::validateArray($this->reachJson);
        }
        if (\is_array($this->sequenceCall)) {
            Model::validateArray($this->sequenceCall);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callAbility) {
            $res['CallAbility'] = $this->callAbility;
        }

        if (null !== $this->GNFlag) {
            $res['GNFlag'] = $this->GNFlag;
        }

        if (null !== $this->reachJson) {
            if (\is_array($this->reachJson)) {
                $res['ReachJson'] = [];
                $n1 = 0;
                foreach ($this->reachJson as $item1) {
                    $res['ReachJson'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sequenceCall) {
            if (\is_array($this->sequenceCall)) {
                $res['SequenceCall'] = [];
                $n1 = 0;
                foreach ($this->sequenceCall as $item1) {
                    $res['SequenceCall'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['ReachJson'] as $item1) {
                    $model->reachJson[$n1] = reachJson::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SequenceCall'])) {
            if (!empty($map['SequenceCall'])) {
                $model->sequenceCall = [];
                $n1 = 0;
                foreach ($map['SequenceCall'] as $item1) {
                    $model->sequenceCall[$n1] = sequenceCall::fromMap($item1);
                    ++$n1;
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
