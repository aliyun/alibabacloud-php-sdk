<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models\GetScenePreviewInfoResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $modelPath;

    /**
     * @var string
     */
    public $panoList;

    /**
     * @var string
     */
    public $textureModelPath;

    /**
     * @var string
     */
    public $texturePanoPath;
    protected $_name = [
        'modelPath' => 'ModelPath',
        'panoList' => 'PanoList',
        'textureModelPath' => 'TextureModelPath',
        'texturePanoPath' => 'TexturePanoPath',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->modelPath) {
            $res['ModelPath'] = $this->modelPath;
        }

        if (null !== $this->panoList) {
            $res['PanoList'] = $this->panoList;
        }

        if (null !== $this->textureModelPath) {
            $res['TextureModelPath'] = $this->textureModelPath;
        }

        if (null !== $this->texturePanoPath) {
            $res['TexturePanoPath'] = $this->texturePanoPath;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModelPath'])) {
            $model->modelPath = $map['ModelPath'];
        }

        if (isset($map['PanoList'])) {
            $model->panoList = $map['PanoList'];
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
