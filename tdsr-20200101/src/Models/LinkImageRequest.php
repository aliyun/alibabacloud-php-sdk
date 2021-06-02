<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Tea\Model;

class LinkImageRequest extends Model
{
    /**
     * @description 子场景ID
     *
     * @var string
     */
    public $subSceneId;

    /**
     * @description 图片或者视频名称xxx.jpg
     *
     * @var string
     */
    public $fileName;

    /**
     * @description 相机高度 单位 cm
     *
     * @var int
     */
    public $cameraHeight;
    protected $_name = [
        'subSceneId'   => 'SubSceneId',
        'fileName'     => 'FileName',
        'cameraHeight' => 'CameraHeight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->subSceneId) {
            $res['SubSceneId'] = $this->subSceneId;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->cameraHeight) {
            $res['CameraHeight'] = $this->cameraHeight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LinkImageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SubSceneId'])) {
            $model->subSceneId = $map['SubSceneId'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['CameraHeight'])) {
            $model->cameraHeight = $map['CameraHeight'];
        }

        return $model;
    }
}
