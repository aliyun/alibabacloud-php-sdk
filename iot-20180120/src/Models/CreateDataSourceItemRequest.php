<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CreateDataSourceItemRequest extends Model
{
    /**
     * @var int
     */
    public $dataSourceId;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $scopeType;

    /**
     * @var string
     */
    public $topic;
    protected $_name = [
        'dataSourceId'  => 'DataSourceId',
        'deviceName'    => 'DeviceName',
        'iotInstanceId' => 'IotInstanceId',
        'productKey'    => 'ProductKey',
        'scopeType'     => 'ScopeType',
        'topic'         => 'Topic',
    ];

    public function validate()
    {
        Model::validateRequired('dataSourceId', $this->dataSourceId, true);
        Model::validateRequired('topic', $this->topic, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->scopeType) {
            $res['ScopeType'] = $this->scopeType;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDataSourceItemRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['ScopeType'])) {
            $model->scopeType = $map['ScopeType'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}
