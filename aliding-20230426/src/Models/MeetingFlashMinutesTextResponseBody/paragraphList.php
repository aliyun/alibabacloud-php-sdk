<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\MeetingFlashMinutesTextResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\MeetingFlashMinutesTextResponseBody\paragraphList\sentenceList;
use AlibabaCloud\SDK\Aliding\V20230426\Models\MeetingFlashMinutesTextResponseBody\paragraphList\speakerDisplay;

class paragraphList extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $nickName;

    /**
     * @var string
     */
    public $paragraph;

    /**
     * @var sentenceList[]
     */
    public $sentenceList;

    /**
     * @var speakerDisplay
     */
    public $speakerDisplay;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'endTime' => 'endTime',
        'nickName' => 'nickName',
        'paragraph' => 'paragraph',
        'sentenceList' => 'sentenceList',
        'speakerDisplay' => 'speakerDisplay',
        'startTime' => 'startTime',
        'userId' => 'userId',
    ];

    public function validate()
    {
        if (\is_array($this->sentenceList)) {
            Model::validateArray($this->sentenceList);
        }
        if (null !== $this->speakerDisplay) {
            $this->speakerDisplay->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->nickName) {
            $res['nickName'] = $this->nickName;
        }

        if (null !== $this->paragraph) {
            $res['paragraph'] = $this->paragraph;
        }

        if (null !== $this->sentenceList) {
            if (\is_array($this->sentenceList)) {
                $res['sentenceList'] = [];
                $n1 = 0;
                foreach ($this->sentenceList as $item1) {
                    $res['sentenceList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->speakerDisplay) {
            $res['speakerDisplay'] = null !== $this->speakerDisplay ? $this->speakerDisplay->toArray($noStream) : $this->speakerDisplay;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
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

        if (isset($map['nickName'])) {
            $model->nickName = $map['nickName'];
        }

        if (isset($map['paragraph'])) {
            $model->paragraph = $map['paragraph'];
        }

        if (isset($map['sentenceList'])) {
            if (!empty($map['sentenceList'])) {
                $model->sentenceList = [];
                $n1 = 0;
                foreach ($map['sentenceList'] as $item1) {
                    $model->sentenceList[$n1] = sentenceList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['speakerDisplay'])) {
            $model->speakerDisplay = speakerDisplay::fromMap($map['speakerDisplay']);
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
