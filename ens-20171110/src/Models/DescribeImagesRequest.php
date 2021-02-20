<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeImagesRequest extends Model
{
    /**
     * @var string
     */
    public $product;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $ensRegionId;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $imageName;

    /**
     * @var string
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $pageSize;
    protected $_name = [
        'product'     => 'product',
        'version'     => 'Version',
        'ensRegionId' => 'EnsRegionId',
        'imageId'     => 'ImageId',
        'status'      => 'Status',
        'imageName'   => 'ImageName',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->product) {
            $res['product'] = $this->product;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeImagesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['product'])) {
            $model->product = $map['product'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
