<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models;

use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectWorkwearRequest\clothes;
use AlibabaCloud\Tea\Model;

class DetectWorkwearRequest extends Model
{
    /**
     * @var clothes
     */
    public $clothes;

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
        'clothes'  => 'Clothes',
        'imageUrl' => 'ImageUrl',
        'labels'   => 'Labels',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clothes) {
            $res['Clothes'] = null !== $this->clothes ? $this->clothes->toMap() : null;
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
     * @return DetectWorkwearRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Clothes'])) {
            $model->clothes = clothes::fromMap($map['Clothes']);
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
