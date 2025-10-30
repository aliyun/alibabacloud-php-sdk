<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\GetXConfigResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\GetXConfigResponseBody\data\reachJsons;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\GetXConfigResponseBody\data\sequenceCalls;

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
     * @var reachJsons[]
     */
    public $reachJsons;

    /**
     * @var sequenceCalls[]
     */
    public $sequenceCalls;

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
        'reachJsons' => 'ReachJsons',
        'sequenceCalls' => 'SequenceCalls',
        'sequenceEndTime' => 'SequenceEndTime',
        'sequenceStartTime' => 'SequenceStartTime',
        'smsAbility' => 'SmsAbility',
        'smsSignMode' => 'SmsSignMode',
    ];

    public function validate()
    {
        if (\is_array($this->reachJsons)) {
            Model::validateArray($this->reachJsons);
        }
        if (\is_array($this->sequenceCalls)) {
            Model::validateArray($this->sequenceCalls);
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

        if (null !== $this->reachJsons) {
            if (\is_array($this->reachJsons)) {
                $res['ReachJsons'] = [];
                $n1 = 0;
                foreach ($this->reachJsons as $item1) {
                    $res['ReachJsons'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sequenceCalls) {
            if (\is_array($this->sequenceCalls)) {
                $res['SequenceCalls'] = [];
                $n1 = 0;
                foreach ($this->sequenceCalls as $item1) {
                    $res['SequenceCalls'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['ReachJsons'])) {
            if (!empty($map['ReachJsons'])) {
                $model->reachJsons = [];
                $n1 = 0;
                foreach ($map['ReachJsons'] as $item1) {
                    $model->reachJsons[$n1] = reachJsons::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SequenceCalls'])) {
            if (!empty($map['SequenceCalls'])) {
                $model->sequenceCalls = [];
                $n1 = 0;
                foreach ($map['SequenceCalls'] as $item1) {
                    $model->sequenceCalls[$n1] = sequenceCalls::fromMap($item1);
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
