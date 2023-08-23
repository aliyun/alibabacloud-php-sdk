<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Tea\Model;

class QuerySceneListShrinkRequest extends Model
{
    /**
     * @example af7***536
     *
     * @var string
     */
    public $hotelId;

    /**
     * @var string
     */
    public $sceneStatesShrink;

    /**
     * @var string
     */
    public $sceneTypesShrink;

    /**
     * @var string
     */
    public $templateInfoIdsShrink;
    protected $_name = [
        'hotelId'               => 'HotelId',
        'sceneStatesShrink'     => 'SceneStates',
        'sceneTypesShrink'      => 'SceneTypes',
        'templateInfoIdsShrink' => 'TemplateInfoIds',
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
        if (null !== $this->sceneStatesShrink) {
            $res['SceneStates'] = $this->sceneStatesShrink;
        }
        if (null !== $this->sceneTypesShrink) {
            $res['SceneTypes'] = $this->sceneTypesShrink;
        }
        if (null !== $this->templateInfoIdsShrink) {
            $res['TemplateInfoIds'] = $this->templateInfoIdsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySceneListShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }
        if (isset($map['SceneStates'])) {
            $model->sceneStatesShrink = $map['SceneStates'];
        }
        if (isset($map['SceneTypes'])) {
            $model->sceneTypesShrink = $map['SceneTypes'];
        }
        if (isset($map['TemplateInfoIds'])) {
            $model->templateInfoIdsShrink = $map['TemplateInfoIds'];
        }

        return $model;
    }
}
