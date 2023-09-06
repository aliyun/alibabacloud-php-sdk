<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\QueryCloudRecordTextResponseBody\paragraphList\sentenceList;

use AlibabaCloud\Tea\Model;

class wordList extends Model
{
    /**
     * @example 7940
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 7940
     *
     * @var int
     */
    public $startTime;

    /**
     * @example 这里
     *
     * @var string
     */
    public $word;

    /**
     * @example 1631172050535000#0
     *
     * @var string
     */
    public $wordId;
    protected $_name = [
        'endTime'   => 'EndTime',
        'startTime' => 'StartTime',
        'word'      => 'Word',
        'wordId'    => 'WordId',
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
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->word) {
            $res['Word'] = $this->word;
        }
        if (null !== $this->wordId) {
            $res['WordId'] = $this->wordId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return wordList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Word'])) {
            $model->word = $map['Word'];
        }
        if (isset($map['WordId'])) {
            $model->wordId = $map['WordId'];
        }

        return $model;
    }
}
