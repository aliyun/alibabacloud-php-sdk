<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Tea\Model;

class CreateRcuSceneShrinkRequest extends Model
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
     * @var string
     */
    public $sceneRelationExtDTOShrink;
    protected $_name = [
        'hotelId'                   => 'HotelId',
        'sceneId'                   => 'SceneId',
        'sceneRelationExtDTOShrink' => 'SceneRelationExtDTO',
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
        if (null !== $this->sceneRelationExtDTOShrink) {
            $res['SceneRelationExtDTO'] = $this->sceneRelationExtDTOShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRcuSceneShrinkRequest
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
            $model->sceneRelationExtDTOShrink = $map['SceneRelationExtDTO'];
        }

        return $model;
    }
}
