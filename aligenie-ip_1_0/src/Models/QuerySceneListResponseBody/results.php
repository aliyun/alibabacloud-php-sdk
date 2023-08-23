<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QuerySceneListResponseBody;

use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QuerySceneListResponseBody\results\templateInfoDTOList;
use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @example https://ailabsaicloudservice.alicdn.com/hotel/icon/changjingmoshi/shuimian.png
     *
     * @var string
     */
    public $icon;

    /**
     * @example 73
     *
     * @var string
     */
    public $sceneId;

    /**
     * @var string
     */
    public $sceneName;

    /**
     * @example external
     *
     * @var string
     */
    public $sceneSource;

    /**
     * @example 1
     *
     * @var int
     */
    public $sceneState;

    /**
     * @example common
     *
     * @var string
     */
    public $sceneType;

    /**
     * @var templateInfoDTOList[]
     */
    public $templateInfoDTOList;

    /**
     * @var string
     */
    public $unavailableReason;
    protected $_name = [
        'icon'                => 'Icon',
        'sceneId'             => 'SceneId',
        'sceneName'           => 'SceneName',
        'sceneSource'         => 'SceneSource',
        'sceneState'          => 'SceneState',
        'sceneType'           => 'SceneType',
        'templateInfoDTOList' => 'TemplateInfoDTOList',
        'unavailableReason'   => 'UnavailableReason',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->icon) {
            $res['Icon'] = $this->icon;
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }
        if (null !== $this->sceneName) {
            $res['SceneName'] = $this->sceneName;
        }
        if (null !== $this->sceneSource) {
            $res['SceneSource'] = $this->sceneSource;
        }
        if (null !== $this->sceneState) {
            $res['SceneState'] = $this->sceneState;
        }
        if (null !== $this->sceneType) {
            $res['SceneType'] = $this->sceneType;
        }
        if (null !== $this->templateInfoDTOList) {
            $res['TemplateInfoDTOList'] = [];
            if (null !== $this->templateInfoDTOList && \is_array($this->templateInfoDTOList)) {
                $n = 0;
                foreach ($this->templateInfoDTOList as $item) {
                    $res['TemplateInfoDTOList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->unavailableReason) {
            $res['UnavailableReason'] = $this->unavailableReason;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return results
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Icon'])) {
            $model->icon = $map['Icon'];
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }
        if (isset($map['SceneName'])) {
            $model->sceneName = $map['SceneName'];
        }
        if (isset($map['SceneSource'])) {
            $model->sceneSource = $map['SceneSource'];
        }
        if (isset($map['SceneState'])) {
            $model->sceneState = $map['SceneState'];
        }
        if (isset($map['SceneType'])) {
            $model->sceneType = $map['SceneType'];
        }
        if (isset($map['TemplateInfoDTOList'])) {
            if (!empty($map['TemplateInfoDTOList'])) {
                $model->templateInfoDTOList = [];
                $n                          = 0;
                foreach ($map['TemplateInfoDTOList'] as $item) {
                    $model->templateInfoDTOList[$n++] = null !== $item ? templateInfoDTOList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UnavailableReason'])) {
            $model->unavailableReason = $map['UnavailableReason'];
        }

        return $model;
    }
}
