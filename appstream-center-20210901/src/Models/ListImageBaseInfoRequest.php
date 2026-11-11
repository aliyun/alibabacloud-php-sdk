<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class ListImageBaseInfoRequest extends Model
{
    /**
     * @var int
     */
    public $bizType;

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
    public $imageType;

    /**
     * @var string
     */
    public $osType;

    /**
     * @var string
     */
    public $packageType;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var string
     */
    public $protocolType;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'bizType' => 'BizType',
        'imageId' => 'ImageId',
        'imageName' => 'ImageName',
        'imageType' => 'ImageType',
        'osType' => 'OsType',
        'packageType' => 'PackageType',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'productType' => 'ProductType',
        'protocolType' => 'ProtocolType',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }

        if (null !== $this->imageType) {
            $res['ImageType'] = $this->imageType;
        }

        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }

        if (null !== $this->packageType) {
            $res['PackageType'] = $this->packageType;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }

        if (isset($map['ImageType'])) {
            $model->imageType = $map['ImageType'];
        }

        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }

        if (isset($map['PackageType'])) {
            $model->packageType = $map['PackageType'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
