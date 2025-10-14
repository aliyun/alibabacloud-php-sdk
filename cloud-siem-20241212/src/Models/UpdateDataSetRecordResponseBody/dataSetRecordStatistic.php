<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\UpdateDataSetRecordResponseBody;

use AlibabaCloud\Dara\Model;

class dataSetRecordStatistic extends Model
{
    /**
     * @var int
     */
    public $newDataSetRecordCount;

    /**
     * @var int
     */
    public $updateDataSetRecordCount;
    protected $_name = [
        'newDataSetRecordCount' => 'NewDataSetRecordCount',
        'updateDataSetRecordCount' => 'UpdateDataSetRecordCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->newDataSetRecordCount) {
            $res['NewDataSetRecordCount'] = $this->newDataSetRecordCount;
        }

        if (null !== $this->updateDataSetRecordCount) {
            $res['UpdateDataSetRecordCount'] = $this->updateDataSetRecordCount;
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
        if (isset($map['NewDataSetRecordCount'])) {
            $model->newDataSetRecordCount = $map['NewDataSetRecordCount'];
        }

        if (isset($map['UpdateDataSetRecordCount'])) {
            $model->updateDataSetRecordCount = $map['UpdateDataSetRecordCount'];
        }

        return $model;
    }
}
