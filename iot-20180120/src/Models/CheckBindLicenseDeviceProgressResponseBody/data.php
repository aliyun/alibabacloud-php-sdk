<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\CheckBindLicenseDeviceProgressResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $failSum;

    /**
     * @example 80
     *
     * @var int
     */
    public $progress;

    /**
     * @example http://***.oss-***.aliyuncs.com/license_device_***\/***\/d***h/c***.csv?Expires=16***&OSSAccessKeyId=L***&Signature=***
     *
     * @var string
     */
    public $resultCsvFile;

    /**
     * @example 9
     *
     * @var int
     */
    public $successSum;
    protected $_name = [
        'failSum'       => 'FailSum',
        'progress'      => 'Progress',
        'resultCsvFile' => 'ResultCsvFile',
        'successSum'    => 'SuccessSum',
    ];

    public function validate()
    {
    }

    public function toMap()
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
