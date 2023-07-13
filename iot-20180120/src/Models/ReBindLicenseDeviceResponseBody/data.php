<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ReBindLicenseDeviceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The unique ID that can be used to query the progress of the batch rebinding operation.
     *
     * @example 123***
     *
     * @var string
     */
    public $checkProgressId;

    /**
     * @description The number of devices that failed to be rebound to the license.
     *
     * @example 2
     *
     * @var int
     */
    public $failSum;

    /**
     * @description The progress of the batch rebinding operation. The progress is a percentage. Valid values: 1 to 100.
     *
     * @example 100
     *
     * @var int
     */
    public $progress;

    /**
     * @description The URL of the file that contains unbound devices. The devices failed to be rebound with the license.
     *
     * @example http://***
     *
     * @var string
     */
    public $resultCsvFile;

    /**
     * @description The number of devices to which the license is rebound.
     *
     * @example 10
     *
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
