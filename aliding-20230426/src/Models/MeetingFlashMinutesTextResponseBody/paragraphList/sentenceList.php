<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\MeetingFlashMinutesTextResponseBody\paragraphList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\MeetingFlashMinutesTextResponseBody\paragraphList\sentenceList\wordList;

class sentenceList extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $sentence;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var wordList[]
     */
    public $wordList;
    protected $_name = [
        'endTime' => 'endTime',
        'sentence' => 'sentence',
        'startTime' => 'startTime',
        'wordList' => 'wordList',
    ];

    public function validate()
    {
        if (\is_array($this->wordList)) {
            Model::validateArray($this->wordList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->sentence) {
            $res['sentence'] = $this->sentence;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->wordList) {
            if (\is_array($this->wordList)) {
                $res['wordList'] = [];
                $n1 = 0;
                foreach ($this->wordList as $item1) {
                    $res['wordList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['sentence'])) {
            $model->sentence = $map['sentence'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['wordList'])) {
            if (!empty($map['wordList'])) {
                $model->wordList = [];
                $n1 = 0;
                foreach ($map['wordList'] as $item1) {
                    $model->wordList[$n1] = wordList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
