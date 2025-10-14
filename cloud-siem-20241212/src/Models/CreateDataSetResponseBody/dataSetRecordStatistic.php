<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\CreateDataSetResponseBody;

use AlibabaCloud\Dara\Model;

class dataSetRecordStatistic extends Model
{
    /**
     * @var string
     */
    public $dataSetId;

    /**
     * @var int
     */
    public $newDataSetRecordCount;
    protected $_name = [
        'dataSetId' => 'DataSetId',
        'newDataSetRecordCount' => 'NewDataSetRecordCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataSetId) {
            $res['DataSetId'] = $this->dataSetId;
        }

        if (null !== $this->newDataSetRecordCount) {
            $res['NewDataSetRecordCount'] = $this->newDataSetRecordCount;
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

        if (isset($map['NewDataSetRecordCount'])) {
            $model->newDataSetRecordCount = $map['NewDataSetRecordCount'];
        }

        return $model;
    }
}
