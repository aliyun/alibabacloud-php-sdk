<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models\GetScenePreviewInfoResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description html转译后的预览数据
     *
     * @var string
     */
    public $panoList;

    /**
     * @description 模型地址
     *
     * @var string
     */
    public $modelPath;

    /**
     * @description 模型的贴图路径
     *
     * @var string
     */
    public $textureModelPath;

    /**
     * @description 漫游后预览图片路径
     *
     * @var string
     */
    public $texturePanoPath;
    protected $_name = [
        'panoList'         => 'PanoList',
        'modelPath'        => 'ModelPath',
        'textureModelPath' => 'TextureModelPath',
        'texturePanoPath'  => 'TexturePanoPath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->panoList) {
            $res['PanoList'] = $this->panoList;
        }
        if (null !== $this->modelPath) {
            $res['ModelPath'] = $this->modelPath;
        }
        if (null !== $this->textureModelPath) {
            $res['TextureModelPath'] = $this->textureModelPath;
        }
        if (null !== $this->texturePanoPath) {
            $res['TexturePanoPath'] = $this->texturePanoPath;
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
        if (isset($map['PanoList'])) {
            $model->panoList = $map['PanoList'];
        }
        if (isset($map['ModelPath'])) {
            $model->modelPath = $map['ModelPath'];
        }
        if (isset($map['TextureModelPath'])) {
            $model->textureModelPath = $map['TextureModelPath'];
        }
        if (isset($map['TexturePanoPath'])) {
            $model->texturePanoPath = $map['TexturePanoPath'];
        }

        return $model;
    }
}
