<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models;

use AlibabaCloud\Tea\Model;

class ListCityMapImageDetailsRequest extends Model
{
    /**
     * @var string
     */
    public $dataSourceId;

    /**
     * @var int
     */
    public $recordNumber;

    /**
     * @var string
     */
    public $timeInterval;
    protected $_name = [
        'dataSourceId' => 'DataSourceId',
        'recordNumber' => 'RecordNumber',
        'timeInterval' => 'TimeInterval',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->recordNumber) {
            $res['RecordNumber'] = $this->recordNumber;
        }
        if (null !== $this->timeInterval) {
            $res['TimeInterval'] = $this->timeInterval;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCityMapImageDetailsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }
        if (isset($map['RecordNumber'])) {
            $model->recordNumber = $map['RecordNumber'];
        }
        if (isset($map['TimeInterval'])) {
            $model->timeInterval = $map['TimeInterval'];
        }

        return $model;
    }
}
