<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeBundlesResponseBody;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeBundlesResponseBody\bundles\desktopTypeAttribute;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeBundlesResponseBody\bundles\disks;
use AlibabaCloud\Tea\Model;

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
    public $language;

    /**
     * @var string
     */
    public $osType;

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
     * @var bool
     */
    public $volumeEncryptionEnabled;

    /**
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
        'language'                => 'Language',
        'osType'                  => 'OsType',
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
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
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
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
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
