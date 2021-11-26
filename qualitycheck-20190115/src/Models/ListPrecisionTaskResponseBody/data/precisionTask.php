<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListPrecisionTaskResponseBody\data;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListPrecisionTaskResponseBody\data\precisionTask\precisions;
use AlibabaCloud\Tea\Model;

class precisionTask extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $dataSetId;

    /**
     * @var string
     */
    public $dataSetName;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var int
     */
    public $incorrectWords;

    /**
     * @var string
     */
    public $name;

    /**
     * @var precisions
     */
    public $precisions;

    /**
     * @var int
     */
    public $source;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var int
     */
    public $verifiedCount;
    protected $_name = [
        'createTime'     => 'CreateTime',
        'dataSetId'      => 'DataSetId',
        'dataSetName'    => 'DataSetName',
        'duration'       => 'Duration',
        'incorrectWords' => 'IncorrectWords',
        'name'           => 'Name',
        'precisions'     => 'Precisions',
        'source'         => 'Source',
        'status'         => 'Status',
        'taskId'         => 'TaskId',
        'totalCount'     => 'TotalCount',
        'updateTime'     => 'UpdateTime',
        'verifiedCount'  => 'VerifiedCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->dataSetId) {
            $res['DataSetId'] = $this->dataSetId;
        }
        if (null !== $this->dataSetName) {
            $res['DataSetName'] = $this->dataSetName;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->incorrectWords) {
            $res['IncorrectWords'] = $this->incorrectWords;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->precisions) {
            $res['Precisions'] = null !== $this->precisions ? $this->precisions->toMap() : null;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->verifiedCount) {
            $res['VerifiedCount'] = $this->verifiedCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return precisionTask
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DataSetId'])) {
            $model->dataSetId = $map['DataSetId'];
        }
        if (isset($map['DataSetName'])) {
            $model->dataSetName = $map['DataSetName'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['IncorrectWords'])) {
            $model->incorrectWords = $map['IncorrectWords'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Precisions'])) {
            $model->precisions = precisions::fromMap($map['Precisions']);
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['VerifiedCount'])) {
            $model->verifiedCount = $map['VerifiedCount'];
        }

        return $model;
    }
}
