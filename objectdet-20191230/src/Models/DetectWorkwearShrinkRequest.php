<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models;

use AlibabaCloud\Tea\Model;

class DetectWorkwearShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $clothesShrink;

    /**
     * @example https://viapi-test.oss-cn-shanghai.aliyuncs.com/test-team/zhangchaorun/tiyan/xxxx.jpg
     *
     * @var string
     */
    public $imageUrl;

    /**
     * @description 1
     *
     * @var string[]
     */
    public $labels;
    protected $_name = [
        'clothesShrink' => 'Clothes',
        'imageUrl'      => 'ImageUrl',
        'labels'        => 'Labels',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clothesShrink) {
            $res['Clothes'] = $this->clothesShrink;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetectWorkwearShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Clothes'])) {
            $model->clothesShrink = $map['Clothes'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = $map['Labels'];
            }
        }

        return $model;
    }
}
