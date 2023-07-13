<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class QueryDevicesHotStorageDataStatusRequest extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $asc;

    /**
     * @example device1
     *
     * @var string
     */
    public $deviceName;

    /**
     * @example y4u2weAI********HMle1234
     *
     * @var string
     */
    public $iotId;

    /**
     * @example iot-2w****
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @example Bo***x44Qx
     *
     * @var string
     */
    public $nextPageToken;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example a1BwAGV****
     *
     * @var string
     */
    public $productKey;

    /**
     * @example user/a***\/b***
     *
     * @var string
     */
    public $userTopic;
    protected $_name = [
        'asc'           => 'Asc',
        'deviceName'    => 'DeviceName',
        'iotId'         => 'IotId',
        'iotInstanceId' => 'IotInstanceId',
        'nextPageToken' => 'NextPageToken',
        'pageSize'      => 'PageSize',
        'productKey'    => 'ProductKey',
        'userTopic'     => 'UserTopic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asc) {
            $res['Asc'] = $this->asc;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->userTopic) {
            $res['UserTopic'] = $this->userTopic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDevicesHotStorageDataStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Asc'])) {
            $model->asc = $map['Asc'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['NextPageToken'])) {
            $model->nextPageToken = $map['NextPageToken'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['UserTopic'])) {
            $model->userTopic = $map['UserTopic'];
        }

        return $model;
    }
}
