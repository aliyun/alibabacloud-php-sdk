<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeBundlesResponseBody;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeBundlesResponseBody\bundles\desktopTypeAttribute;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeBundlesResponseBody\bundles\disks;
use AlibabaCloud\Tea\Model;

class bundles extends Model
{
    /**
     * @description The ID of the cloud computer template.
     *
     * @example bundle_ecd_graphics.2xlarge_s15d15_win2019
     *
     * @var string
     */
    public $bundleId;

    /**
     * @description The name of the cloud computer template.
     *
     * @example Advanced graphics with Windows 2019
     *
     * @var string
     */
    public $bundleName;

    /**
     * @description The type of the cloud computer template.
     *
     * Valid values:
     *
     *   SYSTEM: system template
     *
     * <!-- -->
     *
     *   CUSTOM: custom template
     *
     * <!-- -->
     * @example SYSTEM
     *
     * @var string
     */
    public $bundleType;

    /**
     * @description The time when the cloud computer template was created.
     *
     * @example 2021-09-30T06:09Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The description of the cloud computer template.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The instance type of the cloud computer.
     *
     * @example ecd.graphics.2xlarge
     *
     * @var string
     */
    public $desktopType;

    /**
     * @description The details of the cloud computer instance type.
     *
     * @var desktopTypeAttribute
     */
    public $desktopTypeAttribute;

    /**
     * @description The instance family of the cloud computer.
     *
     * Valid values:
     *
     *   eds.graphics: graphical instance family
     *   eds.hf: instance family with a high clock speed
     *   eds.general: general-purpose instance family
     *
     * @example eds.general
     *
     * @var string
     */
    public $desktopTypeFamily;

    /**
     * @description Details of the disks.
     *
     * @var disks[]
     */
    public $disks;

    /**
     * @description The image ID.
     *
     * @example desktopimage-windows-server-2019-64-ch-vgpu
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The image name.
     *
     * @example Windows server 2019 Chinese
     *
     * @var string
     */
    public $imageName;

    /**
     * @description The status of the image.
     *
     * @example Available
     *
     * @var string
     */
    public $imageStatus;

    /**
     * @description The OS language of the image.
     *
     * @example en-US
     *
     * @var string
     */
    public $language;

    /**
     * @description The type of the OS.
     *
     * Valid values:
     *
     *   Linux
     *
     * <!-- -->
     *
     *   Windows
     *
     * <!-- -->
     * @example Windows
     *
     * @var string
     */
    public $osType;

    /**
     * @description The OS.
     *
     * Valid values:
     *
     *   Ubuntu
     *
     * <!-- -->
     *
     *   Windows Server 2022
     *
     * <!-- -->
     *
     *   UOS
     *
     * <!-- -->
     *
     *   CentOS
     *
     * <!-- -->
     *
     *   Windows Server 2019
     *
     * <!-- -->
     *
     *   Windows Server 2016
     *
     * <!-- -->
     * @example Windows Server 2019
     *
     * @var string
     */
    public $platform;

    /**
     * @description The protocol type.
     *
     * Valid values:
     *
     *   HDX: HDX protocol
     *   ASP: in-house ASP
     *
     * @example ASP
     *
     * @var string
     */
    public $protocolType;

    /**
     * @description The session type.
     *
     * Valid values:
     *
     *   0: single-session
     *   1: multi-session
     *
     * @example 0
     *
     * @var string
     */
    public $sessionType;

    /**
     * @description The inventory status of the cloud computer instance type. This parameter is returned only if you set the `CheckStock` parameter to `true`.
     *
     * @example Sufficient
     *
     * @var string
     */
    public $stockState;

    /**
     * @description Indicates whether disk encryption is enabled.
     *
     * @example false
     *
     * @var bool
     */
    public $volumeEncryptionEnabled;

    /**
     * @description The ID of the Key Management Service (KMS) key that is used when disk encryption is enabled.
     *
     * @example 08c33a6f-4e0a-4a1b-a3fa-7ddfa1d4****
     *
     * @var string
     */
    public $volumeEncryptionKey;
    protected $_name = [
        'bundleId'                => 'BundleId',
        'bundleName'              => 'BundleName',
        'bundleType'              => 'BundleType',
        'creationTime'            => 'CreationTime',
        'description'             => 'Description',
        'desktopType'             => 'DesktopType',
        'desktopTypeAttribute'    => 'DesktopTypeAttribute',
        'desktopTypeFamily'       => 'DesktopTypeFamily',
        'disks'                   => 'Disks',
        'imageId'                 => 'ImageId',
        'imageName'               => 'ImageName',
        'imageStatus'             => 'ImageStatus',
        'language'                => 'Language',
        'osType'                  => 'OsType',
        'platform'                => 'Platform',
        'protocolType'            => 'ProtocolType',
        'sessionType'             => 'SessionType',
        'stockState'              => 'StockState',
        'volumeEncryptionEnabled' => 'VolumeEncryptionEnabled',
        'volumeEncryptionKey'     => 'VolumeEncryptionKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bundleId) {
            $res['BundleId'] = $this->bundleId;
        }
        if (null !== $this->bundleName) {
            $res['BundleName'] = $this->bundleName;
        }
        if (null !== $this->bundleType) {
            $res['BundleType'] = $this->bundleType;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->desktopType) {
            $res['DesktopType'] = $this->desktopType;
        }
        if (null !== $this->desktopTypeAttribute) {
            $res['DesktopTypeAttribute'] = null !== $this->desktopTypeAttribute ? $this->desktopTypeAttribute->toMap() : null;
        }
        if (null !== $this->desktopTypeFamily) {
            $res['DesktopTypeFamily'] = $this->desktopTypeFamily;
        }
        if (null !== $this->disks) {
            $res['Disks'] = [];
            if (null !== $this->disks && \is_array($this->disks)) {
                $n = 0;
                foreach ($this->disks as $item) {
                    $res['Disks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->imageStatus) {
            $res['ImageStatus'] = $this->imageStatus;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }
        if (null !== $this->sessionType) {
            $res['SessionType'] = $this->sessionType;
        }
        if (null !== $this->stockState) {
            $res['StockState'] = $this->stockState;
        }
        if (null !== $this->volumeEncryptionEnabled) {
            $res['VolumeEncryptionEnabled'] = $this->volumeEncryptionEnabled;
        }
        if (null !== $this->volumeEncryptionKey) {
            $res['VolumeEncryptionKey'] = $this->volumeEncryptionKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bundles
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BundleId'])) {
            $model->bundleId = $map['BundleId'];
        }
        if (isset($map['BundleName'])) {
            $model->bundleName = $map['BundleName'];
        }
        if (isset($map['BundleType'])) {
            $model->bundleType = $map['BundleType'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DesktopType'])) {
            $model->desktopType = $map['DesktopType'];
        }
        if (isset($map['DesktopTypeAttribute'])) {
            $model->desktopTypeAttribute = desktopTypeAttribute::fromMap($map['DesktopTypeAttribute']);
        }
        if (isset($map['DesktopTypeFamily'])) {
            $model->desktopTypeFamily = $map['DesktopTypeFamily'];
        }
        if (isset($map['Disks'])) {
            if (!empty($map['Disks'])) {
                $model->disks = [];
                $n            = 0;
                foreach ($map['Disks'] as $item) {
                    $model->disks[$n++] = null !== $item ? disks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['ImageStatus'])) {
            $model->imageStatus = $map['ImageStatus'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }
        if (isset($map['SessionType'])) {
            $model->sessionType = $map['SessionType'];
        }
        if (isset($map['StockState'])) {
            $model->stockState = $map['StockState'];
        }
        if (isset($map['VolumeEncryptionEnabled'])) {
            $model->volumeEncryptionEnabled = $map['VolumeEncryptionEnabled'];
        }
        if (isset($map['VolumeEncryptionKey'])) {
            $model->volumeEncryptionKey = $map['VolumeEncryptionKey'];
        }

        return $model;
    }
}
