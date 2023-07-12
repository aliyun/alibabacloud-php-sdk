<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class DeleteDataSourceItemRequest extends Model
{
    /**
     * @var int
     */
    public $dataSourceId;

    /**
     * @var int
     */
    public $dataSourceItemId;

    /**
     * @var string
     */
    public $iotInstanceId;
    protected $_name = [
        'dataSourceId'     => 'DataSourceId',
        'dataSourceItemId' => 'DataSourceItemId',
        'iotInstanceId'    => 'IotInstanceId',
    ];

    public function validate()
    {
        Model::validateRequired('dataSourceId', $this->dataSourceId, true);
        Model::validateRequired('dataSourceItemId', $this->dataSourceItemId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->dataSourceItemId) {
            $res['DataSourceItemId'] = $this->dataSourceItemId;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteDataSourceItemRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }
        if (isset($map['DataSourceItemId'])) {
            $model->dataSourceItemId = $map['DataSourceItemId'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }

        return $model;
    }
}
