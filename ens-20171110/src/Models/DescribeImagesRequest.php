<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeImagesRequest extends Model
{
    /**
     * @example cn-dalian-unicom
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @example m-5qm2r6xo7njrpdkx04q1oxb4z
     *
     * @var string
     */
    public $imageId;

    /**
     * @example centos_6_08_64_20G_a****
     *
     * @var string
     */
    public $imageName;

    /**
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @example 50
     *
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $snapshotId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'ensRegionId' => 'EnsRegionId',
        'imageId'     => 'ImageId',
        'imageName'   => 'ImageName',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'snapshotId'  => 'SnapshotId',
        'status'      => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
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
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
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
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
