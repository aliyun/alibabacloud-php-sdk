<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Tea\Model;

class QuerySceneListRequest extends Model
{
    /**
     * @example af7***536
     *
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
        'hotelId'         => 'HotelId',
        'sceneStates'     => 'SceneStates',
        'sceneTypes'      => 'SceneTypes',
        'templateInfoIds' => 'TemplateInfoIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hotelId) {
            $res['HotelId'] = $this->hotelId;
        }
        if (null !== $this->sceneStates) {
            $res['SceneStates'] = $this->sceneStates;
        }
        if (null !== $this->sceneTypes) {
            $res['SceneTypes'] = $this->sceneTypes;
        }
        if (null !== $this->templateInfoIds) {
            $res['TemplateInfoIds'] = $this->templateInfoIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySceneListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }
        if (isset($map['SceneStates'])) {
            if (!empty($map['SceneStates'])) {
                $model->sceneStates = $map['SceneStates'];
            }
        }
        if (isset($map['SceneTypes'])) {
            if (!empty($map['SceneTypes'])) {
                $model->sceneTypes = $map['SceneTypes'];
            }
        }
        if (isset($map['TemplateInfoIds'])) {
            if (!empty($map['TemplateInfoIds'])) {
                $model->templateInfoIds = $map['TemplateInfoIds'];
            }
        }

        return $model;
    }
}
