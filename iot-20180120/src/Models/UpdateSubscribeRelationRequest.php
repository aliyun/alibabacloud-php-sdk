<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class UpdateSubscribeRelationRequest extends Model
{
    /**
     * @var string
     */
    public $apiProduct;

    /**
     * @var string
     */
    public $apiRevision;

    /**
     * @var bool
     */
    public $deviceStatusChangeFlag;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var bool
     */
    public $thingHistoryFlag;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $type;

    /**
     * @var bool
     */
    public $deviceDataFlag;

    /**
     * @var string[]
     */
    public $consumerGroupIds;

    /**
     * @var bool
     */
    public $deviceTopoLifeCycleFlag;

    /**
     * @var bool
     */
    public $foundDeviceListFlag;

    /**
     * @var bool
     */
    public $otaEventFlag;

    /**
     * @var bool
     */
    public $deviceLifeCycleFlag;

    /**
     * @var string
     */
    public $mnsConfiguration;

    /**
     * @var bool
     */
    public $deviceTagFlag;

    /**
     * @var bool
     */
    public $otaVersionFlag;

    /**
     * @var bool
     */
    public $otaJobFlag;
    protected $_name = [
        'apiProduct'              => 'ApiProduct',
        'apiRevision'             => 'ApiRevision',
        'deviceStatusChangeFlag'  => 'DeviceStatusChangeFlag',
        'iotInstanceId'           => 'IotInstanceId',
        'thingHistoryFlag'        => 'ThingHistoryFlag',
        'productKey'              => 'ProductKey',
        'type'                    => 'Type',
        'deviceDataFlag'          => 'DeviceDataFlag',
        'consumerGroupIds'        => 'ConsumerGroupIds',
        'deviceTopoLifeCycleFlag' => 'DeviceTopoLifeCycleFlag',
        'foundDeviceListFlag'     => 'FoundDeviceListFlag',
        'otaEventFlag'            => 'OtaEventFlag',
        'deviceLifeCycleFlag'     => 'DeviceLifeCycleFlag',
        'mnsConfiguration'        => 'MnsConfiguration',
        'deviceTagFlag'           => 'DeviceTagFlag',
        'otaVersionFlag'          => 'OtaVersionFlag',
        'otaJobFlag'              => 'OtaJobFlag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiProduct) {
            $res['ApiProduct'] = $this->apiProduct;
        }
        if (null !== $this->apiRevision) {
            $res['ApiRevision'] = $this->apiRevision;
        }
        if (null !== $this->deviceStatusChangeFlag) {
            $res['DeviceStatusChangeFlag'] = $this->deviceStatusChangeFlag;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->thingHistoryFlag) {
            $res['ThingHistoryFlag'] = $this->thingHistoryFlag;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->deviceDataFlag) {
            $res['DeviceDataFlag'] = $this->deviceDataFlag;
        }
        if (null !== $this->consumerGroupIds) {
            $res['ConsumerGroupIds'] = $this->consumerGroupIds;
        }
        if (null !== $this->deviceTopoLifeCycleFlag) {
            $res['DeviceTopoLifeCycleFlag'] = $this->deviceTopoLifeCycleFlag;
        }
        if (null !== $this->foundDeviceListFlag) {
            $res['FoundDeviceListFlag'] = $this->foundDeviceListFlag;
        }
        if (null !== $this->otaEventFlag) {
            $res['OtaEventFlag'] = $this->otaEventFlag;
        }
        if (null !== $this->deviceLifeCycleFlag) {
            $res['DeviceLifeCycleFlag'] = $this->deviceLifeCycleFlag;
        }
        if (null !== $this->mnsConfiguration) {
            $res['MnsConfiguration'] = $this->mnsConfiguration;
        }
        if (null !== $this->deviceTagFlag) {
            $res['DeviceTagFlag'] = $this->deviceTagFlag;
        }
        if (null !== $this->otaVersionFlag) {
            $res['OtaVersionFlag'] = $this->otaVersionFlag;
        }
        if (null !== $this->otaJobFlag) {
            $res['OtaJobFlag'] = $this->otaJobFlag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSubscribeRelationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiProduct'])) {
            $model->apiProduct = $map['ApiProduct'];
        }
        if (isset($map['ApiRevision'])) {
            $model->apiRevision = $map['ApiRevision'];
        }
        if (isset($map['DeviceStatusChangeFlag'])) {
            $model->deviceStatusChangeFlag = $map['DeviceStatusChangeFlag'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['ThingHistoryFlag'])) {
            $model->thingHistoryFlag = $map['ThingHistoryFlag'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['DeviceDataFlag'])) {
            $model->deviceDataFlag = $map['DeviceDataFlag'];
        }
        if (isset($map['ConsumerGroupIds'])) {
            if (!empty($map['ConsumerGroupIds'])) {
                $model->consumerGroupIds = $map['ConsumerGroupIds'];
            }
        }
        if (isset($map['DeviceTopoLifeCycleFlag'])) {
            $model->deviceTopoLifeCycleFlag = $map['DeviceTopoLifeCycleFlag'];
        }
        if (isset($map['FoundDeviceListFlag'])) {
            $model->foundDeviceListFlag = $map['FoundDeviceListFlag'];
        }
        if (isset($map['OtaEventFlag'])) {
            $model->otaEventFlag = $map['OtaEventFlag'];
        }
        if (isset($map['DeviceLifeCycleFlag'])) {
            $model->deviceLifeCycleFlag = $map['DeviceLifeCycleFlag'];
        }
        if (isset($map['MnsConfiguration'])) {
            $model->mnsConfiguration = $map['MnsConfiguration'];
        }
        if (isset($map['DeviceTagFlag'])) {
            $model->deviceTagFlag = $map['DeviceTagFlag'];
        }
        if (isset($map['OtaVersionFlag'])) {
            $model->otaVersionFlag = $map['OtaVersionFlag'];
        }
        if (isset($map['OtaJobFlag'])) {
            $model->otaJobFlag = $map['OtaJobFlag'];
        }

        return $model;
    }
}
