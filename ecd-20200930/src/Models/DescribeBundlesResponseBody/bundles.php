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
    public $description;

    /**
     * @var string
     */
    public $bundleType;

    /**
     * @var string
     */
    public $osType;

    /**
     * @var string
     */
    public $stockState;

    /**
     * @var string
     */
    public $desktopType;

    /**
     * @var string
     */
    public $protocolType;

    /**
     * @var string
     */
    public $bundleId;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $bundleName;

    /**
     * @var disks[]
     */
    public $disks;

    /**
     * @var desktopTypeAttribute
     */
    public $desktopTypeAttribute;
    protected $_name = [
        'description'          => 'Description',
        'bundleType'           => 'BundleType',
        'osType'               => 'OsType',
        'stockState'           => 'StockState',
        'desktopType'          => 'DesktopType',
        'protocolType'         => 'ProtocolType',
        'bundleId'             => 'BundleId',
        'imageId'              => 'ImageId',
        'bundleName'           => 'BundleName',
        'disks'                => 'Disks',
        'desktopTypeAttribute' => 'DesktopTypeAttribute',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->bundleType) {
            $res['BundleType'] = $this->bundleType;
        }
        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }
        if (null !== $this->stockState) {
            $res['StockState'] = $this->stockState;
        }
        if (null !== $this->desktopType) {
            $res['DesktopType'] = $this->desktopType;
        }
        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }
        if (null !== $this->bundleId) {
            $res['BundleId'] = $this->bundleId;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->bundleName) {
            $res['BundleName'] = $this->bundleName;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['BundleType'])) {
            $model->bundleType = $map['BundleType'];
        }
        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }
        if (isset($map['StockState'])) {
            $model->stockState = $map['StockState'];
        }
        if (isset($map['DesktopType'])) {
            $model->desktopType = $map['DesktopType'];
        }
        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }
        if (isset($map['BundleId'])) {
            $model->bundleId = $map['BundleId'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['BundleName'])) {
            $model->bundleName = $map['BundleName'];
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
