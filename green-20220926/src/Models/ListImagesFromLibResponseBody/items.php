<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\ListImagesFromLibResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example 2022-11-30 16:30:29
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 112
     *
     * @var string
     */
    public $imageId;

    /**
     * @example https://oss-cip-shanghai.oss-cn-shanghai.aliyuncs.com/image/upload/IMG_2123.jpg
     *
     * @var string
     */
    public $imageUrl;

    /**
     * @example https://oss-cip-shanghai.oss-cn-shanghai.aliyuncs.com/image/upload/IMG_2123.jpg
     *
     * @var string
     */
    public $thumbnailUrl;
    protected $_name = [
        'gmtCreate' => 'GmtCreate',
        'imageId' => 'ImageId',
        'imageUrl' => 'ImageUrl',
        'thumbnailUrl' => 'ThumbnailUrl',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->thumbnailUrl) {
            $res['ThumbnailUrl'] = $this->thumbnailUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['ThumbnailUrl'])) {
            $model->thumbnailUrl = $map['ThumbnailUrl'];
        }

        return $model;
    }
}
