<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\QueryCloudRecordTextResponseBody;

use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryCloudRecordTextResponseBody\paragraphList\sentenceList;
use AlibabaCloud\Tea\Model;

class paragraphList extends Model
{
    /**
     * @example 7940
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 1631172045153000
     *
     * @var int
     */
    public $nextTtoken;

    /**
     * @example 小钉
     *
     * @var string
     */
    public $nickName;

    /**
     * @example 嘿！你好，这里是小钉
     *
     * @var string
     */
    public $paragraph;

    /**
     * @example 44444
     *
     * @var int
     */
    public $recordId;

    /**
     * @var sentenceList[]
     */
    public $sentenceList;

    /**
     * @example 7940
     *
     * @var int
     */
    public $startTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @example 012345
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'endTime'      => 'EndTime',
        'nextTtoken'   => 'NextTtoken',
        'nickName'     => 'NickName',
        'paragraph'    => 'Paragraph',
        'recordId'     => 'RecordId',
        'sentenceList' => 'SentenceList',
        'startTime'    => 'StartTime',
        'status'       => 'Status',
        'userId'       => 'UserId',
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
            $res['SentenceList'] = [];
            if (null !== $this->sentenceList && \is_array($this->sentenceList)) {
                $n = 0;
                foreach ($this->sentenceList as $item) {
                    $res['SentenceList'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return paragraphList
     */
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
                $n                   = 0;
                foreach ($map['SentenceList'] as $item) {
                    $model->sentenceList[$n++] = null !== $item ? sentenceList::fromMap($item) : $item;
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
