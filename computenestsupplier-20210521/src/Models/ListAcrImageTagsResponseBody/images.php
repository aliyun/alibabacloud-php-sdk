<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListAcrImageTagsResponseBody;

use AlibabaCloud\Tea\Model;

class images extends Model
{
    /**
     * @description The time when the image was created.
     *
     * @example 2021-05-20T00:00:00Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The image size. Unit: bytes.
     *
     * @example 188394616
     *
     * @var string
     */
    public $imageSize;

    /**
     * @description The time when the image was modified.
     *
     * @example 2021-05-20T00:00:00Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description The image version.
     *
     * @example 5.7.2
     *
     * @var string
     */
    public $tag;
    protected $_name = [
        'createTime'   => 'CreateTime',
        'imageSize'    => 'ImageSize',
        'modifiedTime' => 'ModifiedTime',
        'tag'          => 'Tag',
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
        if (null !== $this->imageSize) {
            $res['ImageSize'] = $this->imageSize;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return images
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ImageSize'])) {
            $model->imageSize = $map['ImageSize'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        return $model;
    }
}
