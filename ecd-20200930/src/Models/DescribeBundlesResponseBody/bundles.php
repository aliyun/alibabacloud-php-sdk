<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeBundlesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeBundlesResponseBody\bundles\desktopTypeAttribute;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeBundlesResponseBody\bundles\disks;

class bundles extends Model
{
    /**
     * @var string
     */
    public $bundleId;

    /**
     * @var string
     */
    public $bundleName;

    /**
     * @var string
     */
    public $bundleType;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $dataDiskCategory;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $desktopType;

    /**
     * @var desktopTypeAttribute
     */
    public $desktopTypeAttribute;

    /**
     * @var string
     */
    public $desktopTypeFamily;

    /**
     * @var disks[]
     */
    public $disks;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $imageName;

    /**
     * @var string
     */
    public $imageStatus;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $osType;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $protocolType;

    /**
     * @var string
     */
    public $sessionType;

    /**
     * @var string
     */
    public $stockState;

    /**
     * @var string
     */
    public $systemDiskCategory;

    /**
     * @var bool
     */
    public $volumeEncryptionEnabled;

    /**
     * @var string
     */
    public $volumeEncryptionKey;
    protected $_name = [
        'bundleId' => 'BundleId',
        'bundleName' => 'BundleName',
        'bundleType' => 'BundleType',
        'creationTime' => 'CreationTime',
        'dataDiskCategory' => 'DataDiskCategory',
        'description' => 'Description',
        'desktopType' => 'DesktopType',
        'desktopTypeAttribute' => 'DesktopTypeAttribute',
        'desktopTypeFamily' => 'DesktopTypeFamily',
        'disks' => 'Disks',
        'imageId' => 'ImageId',
        'imageName' => 'ImageName',
        'imageStatus' => 'ImageStatus',
        'language' => 'Language',
        'osType' => 'OsType',
        'platform' => 'Platform',
        'protocolType' => 'ProtocolType',
        'sessionType' => 'SessionType',
        'stockState' => 'StockState',
        'systemDiskCategory' => 'SystemDiskCategory',
        'volumeEncryptionEnabled' => 'VolumeEncryptionEnabled',
        'volumeEncryptionKey' => 'VolumeEncryptionKey',
    ];

    public function validate()
    {
        if (null !== $this->desktopTypeAttribute) {
            $this->desktopTypeAttribute->validate();
        }
        if (\is_array($this->disks)) {
            Model::validateArray($this->disks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->dataDiskCategory) {
            $res['DataDiskCategory'] = $this->dataDiskCategory;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->desktopType) {
            $res['DesktopType'] = $this->desktopType;
        }

        if (null !== $this->desktopTypeAttribute) {
            $res['DesktopTypeAttribute'] = null !== $this->desktopTypeAttribute ? $this->desktopTypeAttribute->toArray($noStream) : $this->desktopTypeAttribute;
        }

        if (null !== $this->desktopTypeFamily) {
            $res['DesktopTypeFamily'] = $this->desktopTypeFamily;
        }

        if (null !== $this->disks) {
            if (\is_array($this->disks)) {
                $res['Disks'] = [];
                $n1 = 0;
                foreach ($this->disks as $item1) {
                    $res['Disks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (null !== $this->systemDiskCategory) {
            $res['SystemDiskCategory'] = $this->systemDiskCategory;
        }

        if (null !== $this->volumeEncryptionEnabled) {
            $res['VolumeEncryptionEnabled'] = $this->volumeEncryptionEnabled;
        }

        if (null !== $this->volumeEncryptionKey) {
            $res['VolumeEncryptionKey'] = $this->volumeEncryptionKey;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['DataDiskCategory'])) {
            $model->dataDiskCategory = $map['DataDiskCategory'];
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
                $n1 = 0;
                foreach ($map['Disks'] as $item1) {
                    $model->disks[$n1++] = disks::fromMap($item1);
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

        if (isset($map['SystemDiskCategory'])) {
            $model->systemDiskCategory = $map['SystemDiskCategory'];
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
