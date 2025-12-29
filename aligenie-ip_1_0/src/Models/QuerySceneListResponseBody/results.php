<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QuerySceneListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QuerySceneListResponseBody\results\templateInfoDTOList;

class results extends Model
{
    /**
     * @var string
     */
    public $icon;

    /**
     * @var string
     */
    public $sceneId;

    /**
     * @var string
     */
    public $sceneName;

    /**
     * @var string
     */
    public $sceneSource;

    /**
     * @var int
     */
    public $sceneState;

    /**
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
        'icon' => 'Icon',
        'sceneId' => 'SceneId',
        'sceneName' => 'SceneName',
        'sceneSource' => 'SceneSource',
        'sceneState' => 'SceneState',
        'sceneType' => 'SceneType',
        'templateInfoDTOList' => 'TemplateInfoDTOList',
        'unavailableReason' => 'UnavailableReason',
    ];

    public function validate()
    {
        if (\is_array($this->templateInfoDTOList)) {
            Model::validateArray($this->templateInfoDTOList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->templateInfoDTOList)) {
                $res['TemplateInfoDTOList'] = [];
                $n1 = 0;
                foreach ($this->templateInfoDTOList as $item1) {
                    $res['TemplateInfoDTOList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->unavailableReason) {
            $res['UnavailableReason'] = $this->unavailableReason;
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
                $n1 = 0;
                foreach ($map['TemplateInfoDTOList'] as $item1) {
                    $model->templateInfoDTOList[$n1] = templateInfoDTOList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['UnavailableReason'])) {
            $model->unavailableReason = $map['UnavailableReason'];
        }

        return $model;
    }
}
