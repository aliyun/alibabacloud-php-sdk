<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models\GetScenePreviewDataResponseBody\data\tags;

use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetScenePreviewDataResponseBody\data\tags\config\buttonConfig;
use AlibabaCloud\Tea\Model;

class config extends Model
{
    /**
     * @description 背景色
     *
     * @var string
     */
    public $backgroundColor;

    /**
     * @description 按钮配置
     *
     * @var buttonConfig
     */
    public $buttonConfig;

    /**
     * @description 内容
     *
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
     * @description 图片链接
     *
     * @var string[]
     */
    public $images;

    /**
     * @description 是否在鸟瞰模式下显示
     *
     * @var bool
     */
    public $isTagVisibleBy3d;

    /**
     * @description 超链接
     *
     * @var string
     */
    public $link;

    /**
     * @description 点位ID
     *
     * @var string
     */
    public $panoId;

    /**
     * @description 坐标
     *
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
     * @description 场景ID
     *
     * @var int
     */
    public $sceneId;

    /**
     * @description 标题
     *
     * @var string
     */
    public $title;

    /**
     * @description 视频链接
     *
     * @var string
     */
    public $video;
    protected $_name = [
        'backgroundColor'   => 'BackgroundColor',
        'buttonConfig'      => 'ButtonConfig',
        'content'           => 'Content',
        'formImgSize'       => 'FormImgSize',
        'formJumpType'      => 'FormJumpType',
        'formSelectImgType' => 'FormSelectImgType',
        'images'            => 'Images',
        'isTagVisibleBy3d'  => 'IsTagVisibleBy3d',
        'link'              => 'Link',
        'panoId'            => 'PanoId',
        'position'          => 'Position',
        'positionPanoCube'  => 'PositionPanoCube',
        'relatedPanoIds'    => 'RelatedPanoIds',
        'sceneId'           => 'SceneId',
        'title'             => 'Title',
        'video'             => 'Video',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backgroundColor) {
            $res['BackgroundColor'] = $this->backgroundColor;
        }
        if (null !== $this->buttonConfig) {
            $res['ButtonConfig'] = null !== $this->buttonConfig ? $this->buttonConfig->toMap() : null;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->formImgSize) {
            $res['FormImgSize'] = $this->formImgSize;
        }
        if (null !== $this->formJumpType) {
            $res['FormJumpType'] = $this->formJumpType;
        }
        if (null !== $this->formSelectImgType) {
            $res['FormSelectImgType'] = $this->formSelectImgType;
        }
        if (null !== $this->images) {
            $res['Images'] = $this->images;
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
            $res['Position'] = $this->position;
        }
        if (null !== $this->positionPanoCube) {
            $res['PositionPanoCube'] = $this->positionPanoCube;
        }
        if (null !== $this->relatedPanoIds) {
            $res['RelatedPanoIds'] = $this->relatedPanoIds;
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

    /**
     * @param array $map
     *
     * @return config
     */
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
                $model->formImgSize = $map['FormImgSize'];
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
                $model->images = $map['Images'];
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
                $model->position = $map['Position'];
            }
        }
        if (isset($map['PositionPanoCube'])) {
            if (!empty($map['PositionPanoCube'])) {
                $model->positionPanoCube = $map['PositionPanoCube'];
            }
        }
        if (isset($map['RelatedPanoIds'])) {
            if (!empty($map['RelatedPanoIds'])) {
                $model->relatedPanoIds = $map['RelatedPanoIds'];
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
