<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\CreateOTAFirmwareRequest\multiFiles;
use AlibabaCloud\Tea\Model;

class CreateOTAFirmwareRequest extends Model
{
    /**
     * @description The version number of the OTA update package. The value can contain letters, digits, periods (.), hyphens (-), and underscores (\_). The version number must be 1 to 64 characters in length.
     *
     * @example 2.0.0
     *
     * @var string
     */
    public $destVersion;

    /**
     * @description The description of the OTA update package. The description must be 1 to 100 characters in length.
     *
     * @example OTA function updated
     *
     * @var string
     */
    public $firmwareDesc;

    /**
     * @description The name of the OTA update package. The name must be unique within an Alibaba Cloud account. The name cannot be modified after the OTA update package is created. The name must be 1 to 40 characters in length, and can contain letters, digits, hyphens (-), underscores (\_), and parentheses (). The name must start with a letter or a digit.
     *
     * @example Firmware2
     *
     * @var string
     */
    public $firmwareName;

    /**
     * @description The signature of the OTA update package. The value is calculated by using the specified **signature algorithm** to sign the OTA update package.
     *
     * > If you add only one file to the OTA update package, you can configure this parameter. If you do not configure this parameter, the MD5 value of the OTA update package in OSS is used as the package signature.
     * @example 93230c3bde425a9d7984a594ac55****
     *
     * @var string
     */
    public $firmwareSign;

    /**
     * @description The size of the OTA update package. Unit: bytes.
     *
     * > If you add only one file to the OTA update package, you can configure this parameter. If you do not configure this parameter, the size of the OTA update package in OSS is used.
     * @example 900
     *
     * @var int
     */
    public $firmwareSize;

    /**
     * @description The URL of the OTA update package. This parameter specifies the storage location of the OTA update package in OSS. You can call the [GenerateOTAUploadURL](~~147310~~) operation to generate a URL for the OTA update package.
     *
     * >If you add only one file to the OTA update package, you must configure this parameter.
     * @example https://iotx-ota.oss-cn-shanghai.aliyuncs.com/ota/bcd6142594d0183a16d825ad8225****\/A6B3400B70CA4D6D872160D1A91A****.bin
     *
     * @var string
     */
    public $firmwareUrl;

    /**
     * @description The ID of the instance. You can view the ID of the instance on the **Overview** page in the IoT Platform console.
     *
     * >*   If your instance has an ID, you must specify the ID for this parameter. Otherwise, the call fails.
     * >*   If no **Overview** page or **ID** is generated for your instance, you do not need to configure this parameter.
     * @example iot-cn-0pp1n8t****
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The name of the OTA module. OTA modules are the updatable units of devices that belong to the same product.
     *
     * > *   If you do not configure this parameter, the default OTA module is used. The default value indicates that the complete device firmware is updated.
     * >*   You can call the [CreateOTAModule](~~186066~~) operation to create a custom OTA module. You can call the [ListOTAModuleByProduct](~~186532~~) operation to query the existing OTA modules of a product.
     * @example WifiConfigModify
     *
     * @var string
     */
    public $moduleName;

    /**
     * @var multiFiles[]
     */
    public $multiFiles;

    /**
     * @description Specifies whether to verify the OTA update package before you create a batch update task.
     *
     *   **true** The system verifies the OTA update package before you create a batch update task. This is the default value.
     *   **false**: The system does not verify the OTA update package before you create a batch update task.
     *
     * @example true
     *
     * @var bool
     */
    public $needToVerify;

    /**
     * @description The **ProductKey** of the product to which the OTA update package belongs.
     *
     * @example a1uctKe****
     *
     * @var string
     */
    public $productKey;

    /**
     * @description The signature algorithm of the OTA update package. Set the value to **MD5**. The value indicates an MD5 signature.
     *
     * Default value: **MD5**.
     * @example MD5
     *
     * @var string
     */
    public $signMethod;

    /**
     * @description The version number of the OTA module of the device to be updated.
     *
     * You can call the [QueryDeviceDetail](~~69594~~) operation and view the **FirmwareVersion** parameter in the response.
     *
     * > *   If you set the **Type** parameter to **1**, you must configure this parameter, and the value cannot be the same as the update package version that is specified by the **DestVersion** parameter.
     * >*   If you set the **Type** parameter to **0**, this parameter is optional.
     * @example 1.0.0
     *
     * @var string
     */
    public $srcVersion;

    /**
     * @description The type of the OTA update package. Valid values:
     *
     *   **0**: The uploaded file contains a full update package. IoT Platform pushes the full update package to a device for update.
     *   **1**: The uploaded file contains only the differences between the latest update package and the previous update package. IoT Platform pushes only the differences to a device for update.
     *
     * Default value: **0**.
     * @example 0
     *
     * @var int
     */
    public $type;

    /**
     * @description The custom information that you want to send to a device. The format of the custom information has no limits. However, the information cannot exceed 4,096 characters in length.
     *
     * After you add the OTA update package and create an update task, IoT Platform sends the custom information to the specified device when IoT Platform pushes an update notification.
     * @var string
     */
    public $udi;
    protected $_name = [
        'destVersion'   => 'DestVersion',
        'firmwareDesc'  => 'FirmwareDesc',
        'firmwareName'  => 'FirmwareName',
        'firmwareSign'  => 'FirmwareSign',
        'firmwareSize'  => 'FirmwareSize',
        'firmwareUrl'   => 'FirmwareUrl',
        'iotInstanceId' => 'IotInstanceId',
        'moduleName'    => 'ModuleName',
        'multiFiles'    => 'MultiFiles',
        'needToVerify'  => 'NeedToVerify',
        'productKey'    => 'ProductKey',
        'signMethod'    => 'SignMethod',
        'srcVersion'    => 'SrcVersion',
        'type'          => 'Type',
        'udi'           => 'Udi',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destVersion) {
            $res['DestVersion'] = $this->destVersion;
        }
        if (null !== $this->firmwareDesc) {
            $res['FirmwareDesc'] = $this->firmwareDesc;
        }
        if (null !== $this->firmwareName) {
            $res['FirmwareName'] = $this->firmwareName;
        }
        if (null !== $this->firmwareSign) {
            $res['FirmwareSign'] = $this->firmwareSign;
        }
        if (null !== $this->firmwareSize) {
            $res['FirmwareSize'] = $this->firmwareSize;
        }
        if (null !== $this->firmwareUrl) {
            $res['FirmwareUrl'] = $this->firmwareUrl;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->moduleName) {
            $res['ModuleName'] = $this->moduleName;
        }
        if (null !== $this->multiFiles) {
            $res['MultiFiles'] = [];
            if (null !== $this->multiFiles && \is_array($this->multiFiles)) {
                $n = 0;
                foreach ($this->multiFiles as $item) {
                    $res['MultiFiles'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->needToVerify) {
            $res['NeedToVerify'] = $this->needToVerify;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->signMethod) {
            $res['SignMethod'] = $this->signMethod;
        }
        if (null !== $this->srcVersion) {
            $res['SrcVersion'] = $this->srcVersion;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->udi) {
            $res['Udi'] = $this->udi;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOTAFirmwareRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestVersion'])) {
            $model->destVersion = $map['DestVersion'];
        }
        if (isset($map['FirmwareDesc'])) {
            $model->firmwareDesc = $map['FirmwareDesc'];
        }
        if (isset($map['FirmwareName'])) {
            $model->firmwareName = $map['FirmwareName'];
        }
        if (isset($map['FirmwareSign'])) {
            $model->firmwareSign = $map['FirmwareSign'];
        }
        if (isset($map['FirmwareSize'])) {
            $model->firmwareSize = $map['FirmwareSize'];
        }
        if (isset($map['FirmwareUrl'])) {
            $model->firmwareUrl = $map['FirmwareUrl'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['ModuleName'])) {
            $model->moduleName = $map['ModuleName'];
        }
        if (isset($map['MultiFiles'])) {
            if (!empty($map['MultiFiles'])) {
                $model->multiFiles = [];
                $n                 = 0;
                foreach ($map['MultiFiles'] as $item) {
                    $model->multiFiles[$n++] = null !== $item ? multiFiles::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NeedToVerify'])) {
            $model->needToVerify = $map['NeedToVerify'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['SignMethod'])) {
            $model->signMethod = $map['SignMethod'];
        }
        if (isset($map['SrcVersion'])) {
            $model->srcVersion = $map['SrcVersion'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Udi'])) {
            $model->udi = $map['Udi'];
        }

        return $model;
    }
}
