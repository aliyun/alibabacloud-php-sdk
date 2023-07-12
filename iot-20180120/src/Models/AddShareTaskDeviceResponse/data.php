<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\AddShareTaskDeviceResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $failSum;

    /**
     * @var string
     */
    public $failedResultCsvFile;

    /**
     * @var int
     */
    public $progress;

    /**
     * @var string
     */
    public $progressId;

    /**
     * @var int
     */
    public $successSum;
    protected $_name = [
        'failSum'             => 'FailSum',
        'failedResultCsvFile' => 'FailedResultCsvFile',
        'progress'            => 'Progress',
        'progressId'          => 'ProgressId',
        'successSum'          => 'SuccessSum',
    ];

    public function validate()
    {
        Model::validateRequired('failSum', $this->failSum, true);
        Model::validateRequired('failedResultCsvFile', $this->failedResultCsvFile, true);
        Model::validateRequired('progress', $this->progress, true);
        Model::validateRequired('progressId', $this->progressId, true);
        Model::validateRequired('successSum', $this->successSum, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failSum) {
            $res['FailSum'] = $this->failSum;
        }
        if (null !== $this->failedResultCsvFile) {
            $res['FailedResultCsvFile'] = $this->failedResultCsvFile;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->progressId) {
            $res['ProgressId'] = $this->progressId;
        }
        if (null !== $this->successSum) {
            $res['SuccessSum'] = $this->successSum;
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
        if (isset($map['FailSum'])) {
            $model->failSum = $map['FailSum'];
        }
        if (isset($map['FailedResultCsvFile'])) {
            $model->failedResultCsvFile = $map['FailedResultCsvFile'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['ProgressId'])) {
            $model->progressId = $map['ProgressId'];
        }
        if (isset($map['SuccessSum'])) {
            $model->successSum = $map['SuccessSum'];
        }

        return $model;
    }
}
