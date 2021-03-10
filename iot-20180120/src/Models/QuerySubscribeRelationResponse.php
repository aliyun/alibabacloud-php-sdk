<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class QuerySubscribeRelationResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $errorMessage;

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
     * @var bool
     */
    public $deviceLifeCycleFlag;

    /**
     * @var bool
     */
    public $deviceStatusChangeFlag;

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
    public $thingHistoryFlag;

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

    /**
     * @var string[]
     */
    public $consumerGroupIds;
    protected $_name = [
        'requestId'               => 'RequestId',
        'success'                 => 'Success',
        'code'                    => 'Code',
        'errorMessage'            => 'ErrorMessage',
        'productKey'              => 'ProductKey',
        'type'                    => 'Type',
        'deviceDataFlag'          => 'DeviceDataFlag',
        'deviceLifeCycleFlag'     => 'DeviceLifeCycleFlag',
        'deviceStatusChangeFlag'  => 'DeviceStatusChangeFlag',
        'deviceTopoLifeCycleFlag' => 'DeviceTopoLifeCycleFlag',
        'foundDeviceListFlag'     => 'FoundDeviceListFlag',
        'otaEventFlag'            => 'OtaEventFlag',
        'thingHistoryFlag'        => 'ThingHistoryFlag',
        'mnsConfiguration'        => 'MnsConfiguration',
        'deviceTagFlag'           => 'DeviceTagFlag',
        'otaVersionFlag'          => 'OtaVersionFlag',
        'otaJobFlag'              => 'OtaJobFlag',
        'consumerGroupIds'        => 'ConsumerGroupIds',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('errorMessage', $this->errorMessage, true);
        Model::validateRequired('productKey', $this->productKey, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('deviceDataFlag', $this->deviceDataFlag, true);
        Model::validateRequired('deviceLifeCycleFlag', $this->deviceLifeCycleFlag, true);
        Model::validateRequired('deviceStatusChangeFlag', $this->deviceStatusChangeFlag, true);
        Model::validateRequired('deviceTopoLifeCycleFlag', $this->deviceTopoLifeCycleFlag, true);
        Model::validateRequired('foundDeviceListFlag', $this->foundDeviceListFlag, true);
        Model::validateRequired('otaEventFlag', $this->otaEventFlag, true);
        Model::validateRequired('thingHistoryFlag', $this->thingHistoryFlag, true);
        Model::validateRequired('mnsConfiguration', $this->mnsConfiguration, true);
        Model::validateRequired('deviceTagFlag', $this->deviceTagFlag, true);
        Model::validateRequired('otaVersionFlag', $this->otaVersionFlag, true);
        Model::validateRequired('otaJobFlag', $this->otaJobFlag, true);
        Model::validateRequired('consumerGroupIds', $this->consumerGroupIds, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
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
        if (null !== $this->deviceLifeCycleFlag) {
            $res['DeviceLifeCycleFlag'] = $this->deviceLifeCycleFlag;
        }
        if (null !== $this->deviceStatusChangeFlag) {
            $res['DeviceStatusChangeFlag'] = $this->deviceStatusChangeFlag;
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
        if (null !== $this->thingHistoryFlag) {
            $res['ThingHistoryFlag'] = $this->thingHistoryFlag;
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
        if (null !== $this->consumerGroupIds) {
            $res['ConsumerGroupIds'] = $this->consumerGroupIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySubscribeRelationResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
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
        if (isset($map['DeviceLifeCycleFlag'])) {
            $model->deviceLifeCycleFlag = $map['DeviceLifeCycleFlag'];
        }
        if (isset($map['DeviceStatusChangeFlag'])) {
            $model->deviceStatusChangeFlag = $map['DeviceStatusChangeFlag'];
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
        if (isset($map['ThingHistoryFlag'])) {
            $model->thingHistoryFlag = $map['ThingHistoryFlag'];
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
        if (isset($map['ConsumerGroupIds'])) {
            if (!empty($map['ConsumerGroupIds'])) {
                $model->consumerGroupIds = $map['ConsumerGroupIds'];
            }
        }

        return $model;
    }
}
