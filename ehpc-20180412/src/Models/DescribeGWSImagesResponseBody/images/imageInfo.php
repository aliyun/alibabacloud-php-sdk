<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeGWSImagesResponseBody\images;

use AlibabaCloud\Tea\Model;

class imageInfo extends Model
{
    /**
     * @example 2019-05-15T06:05:40.000Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example m-bp1by33e4h650m70lb****
     *
     * @var string
     */
    public $imageId;

    /**
     * @example system
     *
     * @var string
     */
    public $imageType;

    /**
     * @example Windows Server 2019
     *
     * @var string
     */
    public $name;

    /**
     * @example 100%
     *
     * @var string
     */
    public $progress;

    /**
     * @example 40
     *
     * @var int
     */
    public $size;

    /**
     * @example Available
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'createTime' => 'CreateTime',
        'imageId'    => 'ImageId',
        'imageType'  => 'ImageType',
        'name'       => 'Name',
        'progress'   => 'Progress',
        'size'       => 'Size',
        'status'     => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageType) {
            $res['ImageType'] = $this->imageType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageType'])) {
            $model->imageType = $map['ImageType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
