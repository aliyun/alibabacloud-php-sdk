<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class DeleteDataSourceItemRequest extends Model
{
    /**
     * @example 1001
     *
     * @var int
     */
    public $dataSourceId;

    /**
     * @example 129322
     *
     * @var int
     */
    public $dataSourceItemId;

    /**
     * @example iot-0pp1n8t****
     *
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
