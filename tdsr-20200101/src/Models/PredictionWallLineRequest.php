<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Tea\Model;

class PredictionWallLineRequest extends Model
{
    /**
     * @description 图片地址
     *
     * @var string
     */
    public $url;

    /**
     * @description 相机高度 单位 cm
     *
     * @var int
     */
    public $cameraHeight;
    protected $_name = [
        'url'          => 'Url',
        'cameraHeight' => 'CameraHeight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->cameraHeight) {
            $res['CameraHeight'] = $this->cameraHeight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PredictionWallLineRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['CameraHeight'])) {
            $model->cameraHeight = $map['CameraHeight'];
        }

        return $model;
    }
}
