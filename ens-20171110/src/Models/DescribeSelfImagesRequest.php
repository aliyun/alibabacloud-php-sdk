<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeSelfImagesRequest extends Model
{
    /**
     * @description The ID of the image. Fuzzy search is supported.
     *
     * @example centos_6_08_64_20G_a****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The name of the image. Fuzzy search is supported.
     *
     * @example centos_6_08_64_20G_a****
     *
     * @var string
     */
    public $imageName;

    /**
     * @description The page number to return. Pages start from page **1**. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * Default value: 10.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the snapshot.
     *
     * @example sp-5xg63dmojc1oaa3pk****
     *
     * @var string
     */
    public $snapshotId;
    protected $_name = [
        'imageId'    => 'ImageId',
        'imageName'  => 'ImageName',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'snapshotId' => 'SnapshotId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSelfImagesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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

        return $model;
    }
}
