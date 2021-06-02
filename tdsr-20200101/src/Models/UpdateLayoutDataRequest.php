<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Tea\Model;

class UpdateLayoutDataRequest extends Model
{
    /**
     * @description 子场景ID
     *
     * @var string
     */
    public $subSceneId;

    /**
     * @description 标注数据
     *
     * @var string
     */
    public $layoutData;
    protected $_name = [
        'subSceneId' => 'SubSceneId',
        'layoutData' => 'LayoutData',
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
        if (null !== $this->layoutData) {
            $res['LayoutData'] = $this->layoutData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateLayoutDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SubSceneId'])) {
            $model->subSceneId = $map['SubSceneId'];
        }
        if (isset($map['LayoutData'])) {
            $model->layoutData = $map['LayoutData'];
        }

        return $model;
    }
}
