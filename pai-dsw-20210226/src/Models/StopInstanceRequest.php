<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20210226\Models;

use AlibabaCloud\Tea\Model;

class StopInstanceRequest extends Model
{
    /**
     * @description 是否保存镜像后停止
     *
     * @var bool
     */
    public $saveImage;
    protected $_name = [
        'saveImage' => 'SaveImage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->saveImage) {
            $res['SaveImage'] = $this->saveImage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SaveImage'])) {
            $model->saveImage = $map['SaveImage'];
        }

        return $model;
    }
}
