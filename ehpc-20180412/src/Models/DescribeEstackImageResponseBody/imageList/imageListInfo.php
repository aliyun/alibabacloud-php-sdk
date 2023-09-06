<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeEstackImageResponseBody\imageList;

use AlibabaCloud\Tea\Model;

class imageListInfo extends Model
{
    /**
     * @description The image name.
     *
     * @example tensorflow-21.09-tf1-py3.sif
     *
     * @var string
     */
    public $imageName;

    /**
     * @description The size of the image.
     *
     * @example 65535
     *
     * @var int
     */
    public $imageSize;

    /**
     * @description The type of the image.
     *
     * @example singularity
     *
     * @var string
     */
    public $imageType;

    /**
     * @description The download URL of the image.
     *
     * @example http://xxxx.oss-cn-hangzhou.aliyuncs.com/eStackPackage/singularity/tensorflow-21.09-tf1-py3.sif
     *
     * @var string
     */
    public $imageUrl;

    /**
     * @description The time when the image was last modified.
     *
     * @example 2022-05-05T07:10:55.000Z
     *
     * @var string
     */
    public $recentUpdateTime;
    protected $_name = [
        'imageName'        => 'ImageName',
        'imageSize'        => 'ImageSize',
        'imageType'        => 'ImageType',
        'imageUrl'         => 'ImageUrl',
        'recentUpdateTime' => 'RecentUpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->imageSize) {
            $res['ImageSize'] = $this->imageSize;
        }
        if (null !== $this->imageType) {
            $res['ImageType'] = $this->imageType;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->recentUpdateTime) {
            $res['RecentUpdateTime'] = $this->recentUpdateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageListInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['ImageSize'])) {
            $model->imageSize = $map['ImageSize'];
        }
        if (isset($map['ImageType'])) {
            $model->imageType = $map['ImageType'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['RecentUpdateTime'])) {
            $model->recentUpdateTime = $map['RecentUpdateTime'];
        }

        return $model;
    }
}
