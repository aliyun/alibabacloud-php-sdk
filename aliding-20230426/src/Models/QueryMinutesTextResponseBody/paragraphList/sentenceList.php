<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMinutesTextResponseBody\paragraphList;

use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMinutesTextResponseBody\paragraphList\sentenceList\wordList;
use AlibabaCloud\Tea\Model;

class sentenceList extends Model
{
    /**
     * @example 7910000
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 这里是小钉
     *
     * @var string
     */
    public $sentence;

    /**
     * @example 7910000
     *
     * @var int
     */
    public $startTime;

    /**
     * @example 012345
     *
     * @var string
     */
    public $userId;

    /**
     * @example []
     *
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
    }

    public function toMap()
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
            $res['WordList'] = [];
            if (null !== $this->wordList && \is_array($this->wordList)) {
                $n = 0;
                foreach ($this->wordList as $item) {
                    $res['WordList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sentenceList
     */
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
                $n               = 0;
                foreach ($map['WordList'] as $item) {
                    $model->wordList[$n++] = null !== $item ? wordList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
