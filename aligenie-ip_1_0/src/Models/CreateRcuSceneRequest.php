<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\CreateRcuSceneRequest\sceneRelationExtDTO;

class CreateRcuSceneRequest extends Model
{
    /**
     * @var string
     */
    public $hotelId;

    /**
     * @var string
     */
    public $sceneId;

    /**
     * @var sceneRelationExtDTO
     */
    public $sceneRelationExtDTO;
    protected $_name = [
        'hotelId' => 'HotelId',
        'sceneId' => 'SceneId',
        'sceneRelationExtDTO' => 'SceneRelationExtDTO',
    ];

    public function validate()
    {
        if (null !== $this->sceneRelationExtDTO) {
            $this->sceneRelationExtDTO->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hotelId) {
            $res['HotelId'] = $this->hotelId;
        }

        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }

        if (null !== $this->sceneRelationExtDTO) {
            $res['SceneRelationExtDTO'] = null !== $this->sceneRelationExtDTO ? $this->sceneRelationExtDTO->toArray($noStream) : $this->sceneRelationExtDTO;
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

        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }

        if (isset($map['SceneRelationExtDTO'])) {
            $model->sceneRelationExtDTO = sceneRelationExtDTO::fromMap($map['SceneRelationExtDTO']);
        }

        return $model;
    }
}
