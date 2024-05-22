<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeImagesRequest extends Model
{
    /**
     * @description The ID of the Edge Node Service (ENS) node.
     *
     * @example cn-dalian-unicom
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @description The ID of the image. You can specify only one image ID.
     *
     * Custom images and public images are supported.
     * @example m-5qm2r6xo7njrpdkx04q1o****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The name of the custom image. The name must be 2 to 128 characters in length The name must start with a letter and cannot start with `acs:` or `aliyun`. The name cannot contain `http://` or `https://`. The name can contain letters, digits, periods (.), colons (:), underscores (_), and hyphens (-).
     *
     * By default, this parameter is left empty, which indicates that the original name is retained.
     * @example centos_6_08_64_20G_a****
     *
     * @var string
     */
    public $imageName;

    /**
     * @description The page number. Pages start from page **1**.
     *
     * Default value: **1**.
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Maximum value: **50**.
     *
     * Default value: **10**.
     * @example 50
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The ID of the snapshot.
     *
     * @example mock-clone_snapshot_id
     *
     * @var string
     */
    public $snapshotId;

    /**
     * @description This parameter is unavailable.
     *
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
