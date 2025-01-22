<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;

class DescribeSampleDataResponseBody extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;
    /**
     * @var string
     */
    public $errorMessage;
    /**
     * @var bool
     */
    public $hasSampleData;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $sampleDataStatus;
    protected $_name = [
        'DBInstanceId'     => 'DBInstanceId',
        'errorMessage'     => 'ErrorMessage',
        'hasSampleData'    => 'HasSampleData',
        'requestId'        => 'RequestId',
        'sampleDataStatus' => 'SampleDataStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->hasSampleData) {
            $res['HasSampleData'] = $this->hasSampleData;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sampleDataStatus) {
            $res['SampleDataStatus'] = $this->sampleDataStatus;
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
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['HasSampleData'])) {
            $model->hasSampleData = $map['HasSampleData'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SampleDataStatus'])) {
            $model->sampleDataStatus = $map['SampleDataStatus'];
        }

        return $model;
    }
}
