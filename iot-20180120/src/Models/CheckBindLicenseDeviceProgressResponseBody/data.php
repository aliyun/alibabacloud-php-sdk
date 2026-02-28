<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\CheckBindLicenseDeviceProgressResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
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
        'failSum' => 'FailSum',
        'progress' => 'Progress',
        'resultCsvFile' => 'ResultCsvFile',
        'successSum' => 'SuccessSum',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
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
