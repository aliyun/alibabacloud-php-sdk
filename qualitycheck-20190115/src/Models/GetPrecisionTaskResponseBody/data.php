<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetPrecisionTaskResponseBody;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetPrecisionTaskResponseBody\data\precisions;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1212
     *
     * @var int
     */
    public $dataSetId;

    /**
     * @var string
     */
    public $dataSetName;

    /**
     * @example 3423
     *
     * @var int
     */
    public $duration;

    /**
     * @example 23
     *
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
     * @example 3
     *
     * @var int
     */
    public $source;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @example 7C1DEF5F-2C18-4D36-99C6-8C27*****
     *
     * @var string
     */
    public $taskId;

    /**
     * @example 3
     *
     * @var int
     */
    public $totalCount;

    /**
     * @example 2020-03-10 20:26:29
     *
     * @var string
     */
    public $updateTime;

    /**
     * @example 2
     *
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
    }

    public function toMap()
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
     * @return data
     */
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
