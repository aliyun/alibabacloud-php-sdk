<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\QueryCloudRecordTextResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryCloudRecordTextResponseBody\paragraphList\sentenceList;

class paragraphList extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $nextTtoken;

    /**
     * @var string
     */
    public $nickName;

    /**
     * @var string
     */
    public $paragraph;

    /**
     * @var int
     */
    public $recordId;

    /**
     * @var sentenceList[]
     */
    public $sentenceList;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'endTime' => 'EndTime',
        'nextTtoken' => 'NextTtoken',
        'nickName' => 'NickName',
        'paragraph' => 'Paragraph',
        'recordId' => 'RecordId',
        'sentenceList' => 'SentenceList',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        if (\is_array($this->sentenceList)) {
            Model::validateArray($this->sentenceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->nextTtoken) {
            $res['NextTtoken'] = $this->nextTtoken;
        }

        if (null !== $this->nickName) {
            $res['NickName'] = $this->nickName;
        }

        if (null !== $this->paragraph) {
            $res['Paragraph'] = $this->paragraph;
        }

        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
        }

        if (null !== $this->sentenceList) {
            if (\is_array($this->sentenceList)) {
                $res['SentenceList'] = [];
                $n1 = 0;
                foreach ($this->sentenceList as $item1) {
                    $res['SentenceList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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

        if (isset($map['NextTtoken'])) {
            $model->nextTtoken = $map['NextTtoken'];
        }

        if (isset($map['NickName'])) {
            $model->nickName = $map['NickName'];
        }

        if (isset($map['Paragraph'])) {
            $model->paragraph = $map['Paragraph'];
        }

        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }

        if (isset($map['SentenceList'])) {
            if (!empty($map['SentenceList'])) {
                $model->sentenceList = [];
                $n1 = 0;
                foreach ($map['SentenceList'] as $item1) {
                    $model->sentenceList[$n1++] = sentenceList::fromMap($item1);
                }
            }
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
