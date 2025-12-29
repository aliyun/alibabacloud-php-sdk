<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Dara\Model;

class QuerySceneListRequest extends Model
{
    /**
     * @var string
     */
    public $hotelId;

    /**
     * @var int[]
     */
    public $sceneStates;

    /**
     * @var string[]
     */
    public $sceneTypes;

    /**
     * @var string[]
     */
    public $templateInfoIds;
    protected $_name = [
        'hotelId' => 'HotelId',
        'sceneStates' => 'SceneStates',
        'sceneTypes' => 'SceneTypes',
        'templateInfoIds' => 'TemplateInfoIds',
    ];

    public function validate()
    {
        if (\is_array($this->sceneStates)) {
            Model::validateArray($this->sceneStates);
        }
        if (\is_array($this->sceneTypes)) {
            Model::validateArray($this->sceneTypes);
        }
        if (\is_array($this->templateInfoIds)) {
            Model::validateArray($this->templateInfoIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hotelId) {
            $res['HotelId'] = $this->hotelId;
        }

        if (null !== $this->sceneStates) {
            if (\is_array($this->sceneStates)) {
                $res['SceneStates'] = [];
                $n1 = 0;
                foreach ($this->sceneStates as $item1) {
                    $res['SceneStates'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sceneTypes) {
            if (\is_array($this->sceneTypes)) {
                $res['SceneTypes'] = [];
                $n1 = 0;
                foreach ($this->sceneTypes as $item1) {
                    $res['SceneTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->templateInfoIds) {
            if (\is_array($this->templateInfoIds)) {
                $res['TemplateInfoIds'] = [];
                $n1 = 0;
                foreach ($this->templateInfoIds as $item1) {
                    $res['TemplateInfoIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }

        if (isset($map['SceneStates'])) {
            if (!empty($map['SceneStates'])) {
                $model->sceneStates = [];
                $n1 = 0;
                foreach ($map['SceneStates'] as $item1) {
                    $model->sceneStates[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SceneTypes'])) {
            if (!empty($map['SceneTypes'])) {
                $model->sceneTypes = [];
                $n1 = 0;
                foreach ($map['SceneTypes'] as $item1) {
                    $model->sceneTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TemplateInfoIds'])) {
            if (!empty($map['TemplateInfoIds'])) {
                $model->templateInfoIds = [];
                $n1 = 0;
                foreach ($map['TemplateInfoIds'] as $item1) {
                    $model->templateInfoIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
