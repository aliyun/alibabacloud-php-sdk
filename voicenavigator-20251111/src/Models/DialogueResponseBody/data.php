<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\DialogueResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\DialogueResponseBody\data\controlParamsList;

class data extends Model
{
    /**
     * @var string
     */
    public $answer;

    /**
     * @var controlParamsList[]
     */
    public $controlParamsList;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var bool
     */
    public $streamEnd;

    /**
     * @var string
     */
    public $streamId;
    protected $_name = [
        'answer' => 'Answer',
        'controlParamsList' => 'ControlParamsList',
        'endTime' => 'EndTime',
        'sessionId' => 'SessionId',
        'startTime' => 'StartTime',
        'streamEnd' => 'StreamEnd',
        'streamId' => 'StreamId',
    ];

    public function validate()
    {
        if (\is_array($this->controlParamsList)) {
            Model::validateArray($this->controlParamsList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->answer) {
            $res['Answer'] = $this->answer;
        }

        if (null !== $this->controlParamsList) {
            if (\is_array($this->controlParamsList)) {
                $res['ControlParamsList'] = [];
                $n1 = 0;
                foreach ($this->controlParamsList as $item1) {
                    $res['ControlParamsList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->streamEnd) {
            $res['StreamEnd'] = $this->streamEnd;
        }

        if (null !== $this->streamId) {
            $res['StreamId'] = $this->streamId;
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
        if (isset($map['Answer'])) {
            $model->answer = $map['Answer'];
        }

        if (isset($map['ControlParamsList'])) {
            if (!empty($map['ControlParamsList'])) {
                $model->controlParamsList = [];
                $n1 = 0;
                foreach ($map['ControlParamsList'] as $item1) {
                    $model->controlParamsList[$n1] = controlParamsList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['StreamEnd'])) {
            $model->streamEnd = $map['StreamEnd'];
        }

        if (isset($map['StreamId'])) {
            $model->streamId = $map['StreamId'];
        }

        return $model;
    }
}
