<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantArticleDetailsResponseBody\data;

use AlibabaCloud\Dara\Model;

class sceneList extends Model
{
    /**
     * @var string
     */
    public $scene;

    /**
     * @var string
     */
    public $sceneId;

    /**
     * @var string[]
     */
    public $sceneImageList;

    /**
     * @var string
     */
    public $sceneTranslate;
    protected $_name = [
        'scene' => 'scene',
        'sceneId' => 'sceneId',
        'sceneImageList' => 'sceneImageList',
        'sceneTranslate' => 'sceneTranslate',
    ];

    public function validate()
    {
        if (\is_array($this->sceneImageList)) {
            Model::validateArray($this->sceneImageList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->scene) {
            $res['scene'] = $this->scene;
        }

        if (null !== $this->sceneId) {
            $res['sceneId'] = $this->sceneId;
        }

        if (null !== $this->sceneImageList) {
            if (\is_array($this->sceneImageList)) {
                $res['sceneImageList'] = [];
                $n1 = 0;
                foreach ($this->sceneImageList as $item1) {
                    $res['sceneImageList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->sceneTranslate) {
            $res['sceneTranslate'] = $this->sceneTranslate;
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
        if (isset($map['scene'])) {
            $model->scene = $map['scene'];
        }

        if (isset($map['sceneId'])) {
            $model->sceneId = $map['sceneId'];
        }

        if (isset($map['sceneImageList'])) {
            if (!empty($map['sceneImageList'])) {
                $model->sceneImageList = [];
                $n1 = 0;
                foreach ($map['sceneImageList'] as $item1) {
                    $model->sceneImageList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['sceneTranslate'])) {
            $model->sceneTranslate = $map['sceneTranslate'];
        }

        return $model;
    }
}
