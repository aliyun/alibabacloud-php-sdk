<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryOTAFirmwareResponseBody;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryOTAFirmwareResponseBody\firmwareInfo\multiFiles;
use AlibabaCloud\Tea\Model;

class firmwareInfo extends Model
{
    /**
     * @description The version number of the OTA update package.
     *
     * @example 4.0.0
     *
     * @var string
     */
    public $destVersion;

    /**
     * @description The description of the OTA update package.
     *
     * @example modified-WiFi-module
     *
     * @var string
     */
    public $firmwareDesc;

    /**
     * @description The unique ID of the OTA update package.
     *
     * @example UfuxnwygsuSkVE0VCN****0100
     *
     * @var string
     */
    public $firmwareId;

    /**
     * @description The name of the OTA update package.
     *
     * @example t3q5rkNm
     *
     * @var string
     */
    public $firmwareName;

    /**
     * @description The signature of the OTA update package.
     *
     * >  This parameter is available if the OTA update package contains a single file.
     * @example 3d04ab6462633508606e5f3daac8****
     *
     * @var string
     */
    public $firmwareSign;

    /**
     * @description The size of the OTA update package file. Unit: bytes.
     *
     * >  This parameter is available if the OTA update package contains a single file.
     * @example 924
     *
     * @var int
     */
    public $firmwareSize;

    /**
     * @description The URL of the update package file that is stored in Object Storage Service (OSS).
     *
     * >  This parameter is available if the OTA update package contains a single file.
     * @example https://ota-***.aliyuncs.com/ota/572ef2fd12ca4791a5b21a9eb948****\/5E962CF83DB1495E8337E9C8A4D1****.bin?Expires=1577587360&OSSAccessKeyId=cS8uRRy54Rsz****&Signature=farzC8%2FVMN4HYdEtXvdiC2OevH****
     *
     * @var string
     */
    public $firmwareUrl;

    /**
     * @description The name of the module.
     *
     * OTA updates are based on the firmware modules of a device. For more information, see [Add a custom OTA module to an update package](~~202664~~).
     * @example WifiConfigModify
     *
     * @var string
     */
    public $moduleName;

    /**
     * @description The information about the OTA update package files. This parameter is available if the OTA update package contains multiple files.
     *
     * @var multiFiles[]
     */
    public $multiFiles;

    /**
     * @description The **ProductKey** of the product to which the OTA update package belongs.
     *
     * @example a19mzPZ****
     *
     * @var string
     */
    public $productKey;

    /**
     * @description The name of the product to which the OTA update package belongs.
     *
     * @example MyProduct
     *
     * @var string
     */
    public $productName;

    /**
     * @description The signature method of the OTA update package.
     *
     * @example MD5
     *
     * @var string
     */
    public $signMethod;

    /**
     * @description The version number of the original update package to be updated.
     *
     * >  This parameter is returned if you perform a delta update. For more information about update package types, see the description of the **Type** parameter.
     * @example 1.0.0
     *
     * @var string
     */
    public $srcVersion;

    /**
     * @description The status of the OTA update package. Valid values:
     *
     *   **-1**: no verification is required
     *   **0**: unverified
     *   **1**: verified
     *   **2**: verifying
     *   **3**: failed to be verified
     *
     * @example 2
     *
     * @var int
     */
    public $status;

    /**
     * @description The type of the OTA update package. Valid values:
     *
     *   **0**: The uploaded file contains a full update package. IoT Platform pushes the full update package to a device for update.
     *   **1**: The uploaded file contains only the differences between the latest update package and previous update package. IoT Platform pushes only the differences to a device for update.
     *
     * @example 0
     *
     * @var int
     */
    public $type;

    /**
     * @description The custom information that was pushed to the device. The information can be up to 4,096 characters in length. No limit is applies to the content format.
     *
     * After you add the update package and create an update task, IoT Platform sends the custom information to the specified device when IoT Platform pushes the update notification.
     * @var string
     */
    public $udi;

    /**
     * @description The time when the OTA update package was created. The time is displayed in UTC.
     *
     * @example 2019-12-28T02:42:22.000Z
     *
     * @var string
     */
    public $utcCreate;

    /**
     * @description The time when the update task was last modified. The time is displayed in UTC.
     *
     * @example 2019-12-28T02:42:41.000Z
     *
     * @var string
     */
    public $utcModified;

    /**
     * @description The verification status of the OTA update package. Valid values:
     *
     *   **0**: unverified
     *   **100**: verified
     *   A value N between 0 and 100 indicates that the update task is N percent completed. You can check the response parameter **Status** to see the verification status.
     *
     * @example 0
     *
     * @var int
     */
    public $verifyProgress;
    protected $_name = [
        'destVersion'    => 'DestVersion',
        'firmwareDesc'   => 'FirmwareDesc',
        'firmwareId'     => 'FirmwareId',
        'firmwareName'   => 'FirmwareName',
        'firmwareSign'   => 'FirmwareSign',
        'firmwareSize'   => 'FirmwareSize',
        'firmwareUrl'    => 'FirmwareUrl',
        'moduleName'     => 'ModuleName',
        'multiFiles'     => 'MultiFiles',
        'productKey'     => 'ProductKey',
        'productName'    => 'ProductName',
        'signMethod'     => 'SignMethod',
        'srcVersion'     => 'SrcVersion',
        'status'         => 'Status',
        'type'           => 'Type',
        'udi'            => 'Udi',
        'utcCreate'      => 'UtcCreate',
        'utcModified'    => 'UtcModified',
        'verifyProgress' => 'VerifyProgress',
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
        if (null !== $this->firmwareId) {
            $res['FirmwareId'] = $this->firmwareId;
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
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->signMethod) {
            $res['SignMethod'] = $this->signMethod;
        }
        if (null !== $this->srcVersion) {
            $res['SrcVersion'] = $this->srcVersion;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->udi) {
            $res['Udi'] = $this->udi;
        }
        if (null !== $this->utcCreate) {
            $res['UtcCreate'] = $this->utcCreate;
        }
        if (null !== $this->utcModified) {
            $res['UtcModified'] = $this->utcModified;
        }
        if (null !== $this->verifyProgress) {
            $res['VerifyProgress'] = $this->verifyProgress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return firmwareInfo
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
        if (isset($map['FirmwareId'])) {
            $model->firmwareId = $map['FirmwareId'];
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
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['SignMethod'])) {
            $model->signMethod = $map['SignMethod'];
        }
        if (isset($map['SrcVersion'])) {
            $model->srcVersion = $map['SrcVersion'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Udi'])) {
            $model->udi = $map['Udi'];
        }
        if (isset($map['UtcCreate'])) {
            $model->utcCreate = $map['UtcCreate'];
        }
        if (isset($map['UtcModified'])) {
            $model->utcModified = $map['UtcModified'];
        }
        if (isset($map['VerifyProgress'])) {
            $model->verifyProgress = $map['VerifyProgress'];
        }

        return $model;
    }
}
