<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetPrecisionTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetPrecisionTaskResponseBody\data\precisions;

class data extends Model
{
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
        if (null !== $this->precisions) {
            $this->precisions->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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
            $res['Precisions'] = null !== $this->precisions ? $this->precisions->toArray($noStream) : $this->precisions;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
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
