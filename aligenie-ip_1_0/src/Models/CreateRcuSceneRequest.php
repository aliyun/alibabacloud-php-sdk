<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\CreateRcuSceneRequest\sceneRelationExtDTO;
use AlibabaCloud\Tea\Model;

class CreateRcuSceneRequest extends Model
{
    /**
     * @example 520a0c0***5eb
     *
     * @var string
     */
    public $hotelId;

    /**
     * @example yoga
     *
     * @var string
     */
    public $sceneId;

    /**
     * @var sceneRelationExtDTO
     */
    public $sceneRelationExtDTO;
    protected $_name = [
        'hotelId'             => 'HotelId',
        'sceneId'             => 'SceneId',
        'sceneRelationExtDTO' => 'SceneRelationExtDTO',
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
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }
        if (null !== $this->sceneRelationExtDTO) {
            $res['SceneRelationExtDTO'] = null !== $this->sceneRelationExtDTO ? $this->sceneRelationExtDTO->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRcuSceneRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }
        if (isset($map['SceneRelationExtDTO'])) {
            $model->sceneRelationExtDTO = sceneRelationExtDTO::fromMap($map['SceneRelationExtDTO']);
        }

        return $model;
    }
}
