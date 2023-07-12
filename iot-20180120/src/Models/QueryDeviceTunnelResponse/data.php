<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceTunnelResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $deviceConnState;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $iotId;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var string
     */
    public $sourceConnState;

    /**
     * @var string
     */
    public $tunnelId;

    /**
     * @var string
     */
    public $tunnelState;

    /**
     * @var string
     */
    public $udi;

    /**
     * @var string
     */
    public $utcClosed;

    /**
     * @var string
     */
    public $utcCreated;
    protected $_name = [
        'description'     => 'Description',
        'deviceConnState' => 'DeviceConnState',
        'deviceName'      => 'DeviceName',
        'iotId'           => 'IotId',
        'productKey'      => 'ProductKey',
        'productName'     => 'ProductName',
        'sourceConnState' => 'SourceConnState',
        'tunnelId'        => 'TunnelId',
        'tunnelState'     => 'TunnelState',
        'udi'             => 'Udi',
        'utcClosed'       => 'UtcClosed',
        'utcCreated'      => 'UtcCreated',
    ];

    public function validate()
    {
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('deviceConnState', $this->deviceConnState, true);
        Model::validateRequired('deviceName', $this->deviceName, true);
        Model::validateRequired('iotId', $this->iotId, true);
        Model::validateRequired('productKey', $this->productKey, true);
        Model::validateRequired('productName', $this->productName, true);
        Model::validateRequired('sourceConnState', $this->sourceConnState, true);
        Model::validateRequired('tunnelId', $this->tunnelId, true);
        Model::validateRequired('tunnelState', $this->tunnelState, true);
        Model::validateRequired('udi', $this->udi, true);
        Model::validateRequired('utcClosed', $this->utcClosed, true);
        Model::validateRequired('utcCreated', $this->utcCreated, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->deviceConnState) {
            $res['DeviceConnState'] = $this->deviceConnState;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->sourceConnState) {
            $res['SourceConnState'] = $this->sourceConnState;
        }
        if (null !== $this->tunnelId) {
            $res['TunnelId'] = $this->tunnelId;
        }
        if (null !== $this->tunnelState) {
            $res['TunnelState'] = $this->tunnelState;
        }
        if (null !== $this->udi) {
            $res['Udi'] = $this->udi;
        }
        if (null !== $this->utcClosed) {
            $res['UtcClosed'] = $this->utcClosed;
        }
        if (null !== $this->utcCreated) {
            $res['UtcCreated'] = $this->utcCreated;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DeviceConnState'])) {
            $model->deviceConnState = $map['DeviceConnState'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['SourceConnState'])) {
            $model->sourceConnState = $map['SourceConnState'];
        }
        if (isset($map['TunnelId'])) {
            $model->tunnelId = $map['TunnelId'];
        }
        if (isset($map['TunnelState'])) {
            $model->tunnelState = $map['TunnelState'];
        }
        if (isset($map['Udi'])) {
            $model->udi = $map['Udi'];
        }
        if (isset($map['UtcClosed'])) {
            $model->utcClosed = $map['UtcClosed'];
        }
        if (isset($map['UtcCreated'])) {
            $model->utcCreated = $map['UtcCreated'];
        }

        return $model;
    }
}
