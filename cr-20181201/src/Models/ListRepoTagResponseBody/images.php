<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoTagResponseBody;

use AlibabaCloud\Tea\Model;

class images extends Model
{
    /**
     * @description The digest of the image.
     *
     * @example 67bfbcc12b67936ec7f867927817cbb071832b873dbcaed312a1930ba5f1****
     *
     * @var string
     */
    public $digest;

    /**
     * @description The time when the image was created.
     *
     * @example 1572839125000
     *
     * @var string
     */
    public $imageCreate;

    /**
     * @description The ID of the image.
     *
     * @example 45023655bf39c382e26a8607d057c27871dee163c1ecf48cc1ebf2a1****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The size of the image.
     *
     * @example 27107966
     *
     * @var int
     */
    public $imageSize;

    /**
     * @description The time when the image was last updated.
     *
     * @example 1572875608000
     *
     * @var string
     */
    public $imageUpdate;

    /**
     * @description The status of the image.
     *
     * @example NORMAL
     *
     * @var string
     */
    public $status;

    /**
     * @description The tag of the image.
     *
     * @example v0.1
     *
     * @var string
     */
    public $tag;
    protected $_name = [
        'digest'      => 'Digest',
        'imageCreate' => 'ImageCreate',
        'imageId'     => 'ImageId',
        'imageSize'   => 'ImageSize',
        'imageUpdate' => 'ImageUpdate',
        'status'      => 'Status',
        'tag'         => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->digest) {
            $res['Digest'] = $this->digest;
        }
        if (null !== $this->imageCreate) {
            $res['ImageCreate'] = $this->imageCreate;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageSize) {
            $res['ImageSize'] = $this->imageSize;
        }
        if (null !== $this->imageUpdate) {
            $res['ImageUpdate'] = $this->imageUpdate;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Digest'])) {
            $model->digest = $map['Digest'];
        }
        if (isset($map['ImageCreate'])) {
            $model->imageCreate = $map['ImageCreate'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageSize'])) {
            $model->imageSize = $map['ImageSize'];
        }
        if (isset($map['ImageUpdate'])) {
            $model->imageUpdate = $map['ImageUpdate'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        return $model;
    }
}
