<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Tea\Model;

class AddMosaicsRequest extends Model
{
    /**
     * @description 子场景ID
     *
     * @var string
     */
    public $subSceneId;

    /**
     * @description 马赛克位置数据
     *
     * @var string
     */
    public $markPosition;
    protected $_name = [
        'subSceneId'   => 'SubSceneId',
        'markPosition' => 'MarkPosition',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->subSceneId) {
            $res['SubSceneId'] = $this->subSceneId;
        }
        if (null !== $this->markPosition) {
            $res['MarkPosition'] = $this->markPosition;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddMosaicsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SubSceneId'])) {
            $model->subSceneId = $map['SubSceneId'];
        }
        if (isset($map['MarkPosition'])) {
            $model->markPosition = $map['MarkPosition'];
        }

        return $model;
    }
}
