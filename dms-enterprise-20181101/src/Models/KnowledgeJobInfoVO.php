<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class KnowledgeJobInfoVO extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $jobId;

    /**
     * @var int
     */
    public $knowledgeCnt;

    /**
     * @var int
     */
    public $progress;

    /**
     * @var string
     */
    public $showJobId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $supplement;

    /**
     * @var int
     */
    public $tableCnt;
    protected $_name = [
        'createTime' => 'CreateTime',
        'creator' => 'Creator',
        'description' => 'Description',
        'endTime' => 'EndTime',
        'jobId' => 'JobId',
        'knowledgeCnt' => 'KnowledgeCnt',
        'progress' => 'Progress',
        'showJobId' => 'ShowJobId',
        'status' => 'Status',
        'supplement' => 'Supplement',
        'tableCnt' => 'TableCnt',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->knowledgeCnt) {
            $res['KnowledgeCnt'] = $this->knowledgeCnt;
        }

        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }

        if (null !== $this->showJobId) {
            $res['ShowJobId'] = $this->showJobId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->supplement) {
            $res['Supplement'] = $this->supplement;
        }

        if (null !== $this->tableCnt) {
            $res['TableCnt'] = $this->tableCnt;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['KnowledgeCnt'])) {
            $model->knowledgeCnt = $map['KnowledgeCnt'];
        }

        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }

        if (isset($map['ShowJobId'])) {
            $model->showJobId = $map['ShowJobId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Supplement'])) {
            $model->supplement = $map['Supplement'];
        }

        if (isset($map['TableCnt'])) {
            $model->tableCnt = $map['TableCnt'];
        }

        return $model;
    }
}
