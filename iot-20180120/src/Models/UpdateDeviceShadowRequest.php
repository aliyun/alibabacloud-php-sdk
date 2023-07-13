<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class UpdateDeviceShadowRequest extends Model
{
    /**
     * @description Specifies whether to perform an incremental update on the **desired** parameter. Valid values:
     *
     *   **true**: performs an incremental update.
     *   **false**: performs a full update. This is the default value.
     *
     * @example false
     *
     * @var bool
     */
    public $deltaUpdate;

    /**
     * @description The name of the device whose shadow information you want to modify.
     *
     * @example device1
     *
     * @var string
     */
    public $deviceName;

    /**
     * @description The ID of the elastic container instance. You can view the ID of the instance on the **Overview** page in the IoT Platform console.****
     *
     * >*   If your instance has an ID, you must specify the ID for this parameter. Otherwise, the call fails.****
     * >*   If no **Overview** page or **ID** is generated for your instance, you do not need to configure this parameter.
     *
     * For more information, see [Overview](~~356505~~).
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The ProductKey of the product to which the device belongs.
     *
     * @example a1T27vz****
     *
     * @var string
     */
    public $productKey;

    /**
     * @description The information that you want to specify for the device shadow.
     *
     * The information includes the following parameters:
     *
     *   **method**: the type of the operation. Data type: string. Set the value to **update**.
     *
     *   **state**: the status of the device shadow. Data type: string. The **desired** parameter specifies the expected shadow status.
     *
     *   **version**: the version of the device shadow. Data type: long.
     *
     *   If versioning is not required, set this parameter to 0.
     *   If versioning is required, specify a version that is later than the current version.
     *
     **
     *
     **Important** If versioning is required, do not query the version of a device shadow in the IoT Platform console. If a large number of update and query operations are concurrently performed, multiple update operations may return the same version. In this case, the most recent update operation may first be completed. As a result, the current shadow information is not the latest shadow information. We recommend that you maintain the versions of device shadows on the on-premises device. When you call this operation, use an on-premises application to obtain the latest version of the device shadow.
     *
     * @example {"method":"update","state":{"desired":{"color":"green"}},"version":2}
     *
     * @var string
     */
    public $shadowMessage;
    protected $_name = [
        'deltaUpdate'   => 'DeltaUpdate',
        'deviceName'    => 'DeviceName',
        'iotInstanceId' => 'IotInstanceId',
        'productKey'    => 'ProductKey',
        'shadowMessage' => 'ShadowMessage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deltaUpdate) {
            $res['DeltaUpdate'] = $this->deltaUpdate;
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
        if (null !== $this->shadowMessage) {
            $res['ShadowMessage'] = $this->shadowMessage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDeviceShadowRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeltaUpdate'])) {
            $model->deltaUpdate = $map['DeltaUpdate'];
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
        if (isset($map['ShadowMessage'])) {
            $model->shadowMessage = $map['ShadowMessage'];
        }

        return $model;
    }
}
