<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models\GetScenePreviewDataResponseBody\data;

use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetScenePreviewDataResponseBody\data\model\panoList;
use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @var string
     */
    public $modelPath;

    /**
     * @var panoList[]
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
        'modelPath'        => 'ModelPath',
        'panoList'         => 'PanoList',
        'textureModelPath' => 'TextureModelPath',
        'texturePanoPath'  => 'TexturePanoPath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->modelPath) {
            $res['ModelPath'] = $this->modelPath;
        }
        if (null !== $this->panoList) {
            $res['PanoList'] = [];
            if (null !== $this->panoList && \is_array($this->panoList)) {
                $n = 0;
                foreach ($this->panoList as $item) {
                    $res['PanoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return model_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModelPath'])) {
            $model->modelPath = $map['ModelPath'];
        }
        if (isset($map['PanoList'])) {
            if (!empty($map['PanoList'])) {
                $model->panoList = [];
                $n               = 0;
                foreach ($map['PanoList'] as $item) {
                    $model->panoList[$n++] = null !== $item ? panoList::fromMap($item) : $item;
                }
            }
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
