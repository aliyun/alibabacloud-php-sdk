<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMinutesTextResponseBody\paragraphList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMinutesTextResponseBody\paragraphList\sentenceList\wordList;

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
     * @var string
     */
    public $userId;
    /**
     * @var wordList[]
     */
    public $wordList;
    protected $_name = [
        'endTime'   => 'EndTime',
        'sentence'  => 'Sentence',
        'startTime' => 'StartTime',
        'userId'    => 'UserId',
        'wordList'  => 'WordList',
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
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->sentence) {
            $res['Sentence'] = $this->sentence;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->wordList) {
            if (\is_array($this->wordList)) {
                $res['WordList'] = [];
                $n1              = 0;
                foreach ($this->wordList as $item1) {
                    $res['WordList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Sentence'])) {
            $model->sentence = $map['Sentence'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['WordList'])) {
            if (!empty($map['WordList'])) {
                $model->wordList = [];
                $n1              = 0;
                foreach ($map['WordList'] as $item1) {
                    $model->wordList[$n1++] = wordList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
