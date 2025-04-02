<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\QueryCloudRecordTextResponseBody\paragraphList\sentenceList;

use AlibabaCloud\Dara\Model;

class wordList extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $word;

    /**
     * @var string
     */
    public $wordId;
    protected $_name = [
        'endTime' => 'EndTime',
        'startTime' => 'StartTime',
        'word' => 'Word',
        'wordId' => 'WordId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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
