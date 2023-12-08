<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20230601\Models\GetEnterpriseDataPageImageResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 720
     *
     * @var int
     */
    public $height;

    /**
     * @example https://cadt-studio-publish.oss-cn-hangzhou.aliyuncs.com/1254528490571584/tsr-05FTI43JU8PHDEO9.png
     *
     * @var string
     */
    public $imageUrl;

    /**
     * @example 1
     *
     * @var string
     */
    public $pageId;

    /**
     * @example 1280
     *
     * @var int
     */
    public $width;
    protected $_name = [
        'height'   => 'Height',
        'imageUrl' => 'ImageUrl',
        'pageId'   => 'PageId',
        'width'    => 'Width',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->pageId) {
            $res['PageId'] = $this->pageId;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['PageId'])) {
            $model->pageId = $map['PageId'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
