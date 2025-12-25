<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models\GetScenePreviewDataResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetScenePreviewDataResponseBody\data\model\panoList;

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
        'modelPath' => 'ModelPath',
        'panoList' => 'PanoList',
        'textureModelPath' => 'TextureModelPath',
        'texturePanoPath' => 'TexturePanoPath',
    ];

    public function validate()
    {
        if (\is_array($this->panoList)) {
            Model::validateArray($this->panoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->modelPath) {
            $res['ModelPath'] = $this->modelPath;
        }

        if (null !== $this->panoList) {
            if (\is_array($this->panoList)) {
                $res['PanoList'] = [];
                $n1 = 0;
                foreach ($this->panoList as $item1) {
                    $res['PanoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (!empty($map['PanoList'])) {
                $model->panoList = [];
                $n1 = 0;
                foreach ($map['PanoList'] as $item1) {
                    $model->panoList[$n1] = panoList::fromMap($item1);
                    ++$n1;
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
