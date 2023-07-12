<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ReBindLicenseDeviceResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $checkProgressId;

    /**
     * @var int
     */
    public $failSum;

    /**
     * @var int
     */
    public $progress;

    /**
     * @var string
     */
    public $resultCsvFile;

    /**
     * @var int
     */
    public $successSum;
    protected $_name = [
        'checkProgressId' => 'CheckProgressId',
        'failSum'         => 'FailSum',
        'progress'        => 'Progress',
        'resultCsvFile'   => 'ResultCsvFile',
        'successSum'      => 'SuccessSum',
    ];

    public function validate()
    {
        Model::validateRequired('checkProgressId', $this->checkProgressId, true);
        Model::validateRequired('failSum', $this->failSum, true);
        Model::validateRequired('progress', $this->progress, true);
        Model::validateRequired('resultCsvFile', $this->resultCsvFile, true);
        Model::validateRequired('successSum', $this->successSum, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkProgressId) {
            $res['CheckProgressId'] = $this->checkProgressId;
        }
        if (null !== $this->failSum) {
            $res['FailSum'] = $this->failSum;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->resultCsvFile) {
            $res['ResultCsvFile'] = $this->resultCsvFile;
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
        if (isset($map['CheckProgressId'])) {
            $model->checkProgressId = $map['CheckProgressId'];
        }
        if (isset($map['FailSum'])) {
            $model->failSum = $map['FailSum'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['ResultCsvFile'])) {
            $model->resultCsvFile = $map['ResultCsvFile'];
        }
        if (isset($map['SuccessSum'])) {
            $model->successSum = $map['SuccessSum'];
        }

        return $model;
    }
}
