<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models\GetScenePreviewDataResponseBody\data\tags;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetScenePreviewDataResponseBody\data\tags\config\buttonConfig;

class config extends Model
{
    /**
     * @var string
     */
    public $backgroundColor;

    /**
     * @var buttonConfig
     */
    public $buttonConfig;

    /**
     * @var string
     */
    public $content;

    /**
     * @var int[]
     */
    public $formImgSize;

    /**
     * @var bool
     */
    public $formJumpType;

    /**
     * @var string
     */
    public $formSelectImgType;

    /**
     * @var string[]
     */
    public $images;

    /**
     * @var bool
     */
    public $isTagVisibleBy3d;

    /**
     * @var string
     */
    public $link;

    /**
     * @var string
     */
    public $panoId;

    /**
     * @var float[]
     */
    public $position;

    /**
     * @var float[]
     */
    public $positionPanoCube;

    /**
     * @var string[]
     */
    public $relatedPanoIds;

    /**
     * @var int
     */
    public $sceneId;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $video;
    protected $_name = [
        'backgroundColor' => 'BackgroundColor',
        'buttonConfig' => 'ButtonConfig',
        'content' => 'Content',
        'formImgSize' => 'FormImgSize',
        'formJumpType' => 'FormJumpType',
        'formSelectImgType' => 'FormSelectImgType',
        'images' => 'Images',
        'isTagVisibleBy3d' => 'IsTagVisibleBy3d',
        'link' => 'Link',
        'panoId' => 'PanoId',
        'position' => 'Position',
        'positionPanoCube' => 'PositionPanoCube',
        'relatedPanoIds' => 'RelatedPanoIds',
        'sceneId' => 'SceneId',
        'title' => 'Title',
        'video' => 'Video',
    ];

    public function validate()
    {
        if (null !== $this->buttonConfig) {
            $this->buttonConfig->validate();
        }
        if (\is_array($this->formImgSize)) {
            Model::validateArray($this->formImgSize);
        }
        if (\is_array($this->images)) {
            Model::validateArray($this->images);
        }
        if (\is_array($this->position)) {
            Model::validateArray($this->position);
        }
        if (\is_array($this->positionPanoCube)) {
            Model::validateArray($this->positionPanoCube);
        }
        if (\is_array($this->relatedPanoIds)) {
            Model::validateArray($this->relatedPanoIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backgroundColor) {
            $res['BackgroundColor'] = $this->backgroundColor;
        }

        if (null !== $this->buttonConfig) {
            $res['ButtonConfig'] = null !== $this->buttonConfig ? $this->buttonConfig->toArray($noStream) : $this->buttonConfig;
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->formImgSize) {
            if (\is_array($this->formImgSize)) {
                $res['FormImgSize'] = [];
                $n1 = 0;
                foreach ($this->formImgSize as $item1) {
                    $res['FormImgSize'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->formJumpType) {
            $res['FormJumpType'] = $this->formJumpType;
        }

        if (null !== $this->formSelectImgType) {
            $res['FormSelectImgType'] = $this->formSelectImgType;
        }

        if (null !== $this->images) {
            if (\is_array($this->images)) {
                $res['Images'] = [];
                $n1 = 0;
                foreach ($this->images as $item1) {
                    $res['Images'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->isTagVisibleBy3d) {
            $res['IsTagVisibleBy3d'] = $this->isTagVisibleBy3d;
        }

        if (null !== $this->link) {
            $res['Link'] = $this->link;
        }

        if (null !== $this->panoId) {
            $res['PanoId'] = $this->panoId;
        }

        if (null !== $this->position) {
            if (\is_array($this->position)) {
                $res['Position'] = [];
                $n1 = 0;
                foreach ($this->position as $item1) {
                    $res['Position'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->positionPanoCube) {
            if (\is_array($this->positionPanoCube)) {
                $res['PositionPanoCube'] = [];
                $n1 = 0;
                foreach ($this->positionPanoCube as $item1) {
                    $res['PositionPanoCube'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->relatedPanoIds) {
            if (\is_array($this->relatedPanoIds)) {
                $res['RelatedPanoIds'] = [];
                $n1 = 0;
                foreach ($this->relatedPanoIds as $item1) {
                    $res['RelatedPanoIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        if (null !== $this->video) {
            $res['Video'] = $this->video;
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
        if (isset($map['BackgroundColor'])) {
            $model->backgroundColor = $map['BackgroundColor'];
        }

        if (isset($map['ButtonConfig'])) {
            $model->buttonConfig = buttonConfig::fromMap($map['ButtonConfig']);
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['FormImgSize'])) {
            if (!empty($map['FormImgSize'])) {
                $model->formImgSize = [];
                $n1 = 0;
                foreach ($map['FormImgSize'] as $item1) {
                    $model->formImgSize[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['FormJumpType'])) {
            $model->formJumpType = $map['FormJumpType'];
        }

        if (isset($map['FormSelectImgType'])) {
            $model->formSelectImgType = $map['FormSelectImgType'];
        }

        if (isset($map['Images'])) {
            if (!empty($map['Images'])) {
                $model->images = [];
                $n1 = 0;
                foreach ($map['Images'] as $item1) {
                    $model->images[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['IsTagVisibleBy3d'])) {
            $model->isTagVisibleBy3d = $map['IsTagVisibleBy3d'];
        }

        if (isset($map['Link'])) {
            $model->link = $map['Link'];
        }

        if (isset($map['PanoId'])) {
            $model->panoId = $map['PanoId'];
        }

        if (isset($map['Position'])) {
            if (!empty($map['Position'])) {
                $model->position = [];
                $n1 = 0;
                foreach ($map['Position'] as $item1) {
                    $model->position[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PositionPanoCube'])) {
            if (!empty($map['PositionPanoCube'])) {
                $model->positionPanoCube = [];
                $n1 = 0;
                foreach ($map['PositionPanoCube'] as $item1) {
                    $model->positionPanoCube[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RelatedPanoIds'])) {
            if (!empty($map['RelatedPanoIds'])) {
                $model->relatedPanoIds = [];
                $n1 = 0;
                foreach ($map['RelatedPanoIds'] as $item1) {
                    $model->relatedPanoIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['Video'])) {
            $model->video = $map['Video'];
        }

        return $model;
    }
}
