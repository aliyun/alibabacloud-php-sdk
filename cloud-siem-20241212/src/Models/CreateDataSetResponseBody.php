<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\CreateDataSetResponseBody\dataSetRecordStatistic;

class CreateDataSetResponseBody extends Model
{
    /**
     * @var dataSetRecordStatistic
     */
    public $dataSetRecordStatistic;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dataSetRecordStatistic' => 'DataSetRecordStatistic',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->dataSetRecordStatistic) {
            $this->dataSetRecordStatistic->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataSetRecordStatistic) {
            $res['DataSetRecordStatistic'] = null !== $this->dataSetRecordStatistic ? $this->dataSetRecordStatistic->toArray($noStream) : $this->dataSetRecordStatistic;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DataSetRecordStatistic'])) {
            $model->dataSetRecordStatistic = dataSetRecordStatistic::fromMap($map['DataSetRecordStatistic']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
