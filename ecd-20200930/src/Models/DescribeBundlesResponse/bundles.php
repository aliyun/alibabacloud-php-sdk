<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeBundlesResponse;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeBundlesResponse\bundles\desktopTypeAttribute;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeBundlesResponse\bundles\disks;
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
     * @var string
     */
    public $desktopTypeFamily;

    /**
     * @var string
     */
    public $imageId;

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
    public $stockState;

    /**
     * @var disks[]
     */
    public $disks;

    /**
     * @var desktopTypeAttribute
     */
    public $desktopTypeAttribute;
    protected $_name = [
        'bundleId'             => 'BundleId',
        'bundleName'           => 'BundleName',
        'bundleType'           => 'BundleType',
        'creationTime'         => 'CreationTime',
        'description'          => 'Description',
        'desktopType'          => 'DesktopType',
        'desktopTypeFamily'    => 'DesktopTypeFamily',
        'imageId'              => 'ImageId',
        'language'             => 'Language',
        'osType'               => 'OsType',
        'protocolType'         => 'ProtocolType',
        'stockState'           => 'StockState',
        'disks'                => 'Disks',
        'desktopTypeAttribute' => 'DesktopTypeAttribute',
    ];

    public function validate()
    {
        Model::validateRequired('bundleId', $this->bundleId, true);
        Model::validateRequired('bundleName', $this->bundleName, true);
        Model::validateRequired('bundleType', $this->bundleType, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('desktopType', $this->desktopType, true);
        Model::validateRequired('desktopTypeFamily', $this->desktopTypeFamily, true);
        Model::validateRequired('imageId', $this->imageId, true);
        Model::validateRequired('language', $this->language, true);
        Model::validateRequired('osType', $this->osType, true);
        Model::validateRequired('protocolType', $this->protocolType, true);
        Model::validateRequired('stockState', $this->stockState, true);
        Model::validateRequired('disks', $this->disks, true);
        Model::validateRequired('desktopTypeAttribute', $this->desktopTypeAttribute, true);
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
        if (null !== $this->desktopTypeFamily) {
            $res['DesktopTypeFamily'] = $this->desktopTypeFamily;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
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
        if (null !== $this->stockState) {
            $res['StockState'] = $this->stockState;
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
        if (null !== $this->desktopTypeAttribute) {
            $res['DesktopTypeAttribute'] = null !== $this->desktopTypeAttribute ? $this->desktopTypeAttribute->toMap() : null;
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
        if (isset($map['DesktopTypeFamily'])) {
            $model->desktopTypeFamily = $map['DesktopTypeFamily'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
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
        if (isset($map['StockState'])) {
            $model->stockState = $map['StockState'];
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
        if (isset($map['DesktopTypeAttribute'])) {
            $model->desktopTypeAttribute = desktopTypeAttribute::fromMap($map['DesktopTypeAttribute']);
        }

        return $model;
    }
}
