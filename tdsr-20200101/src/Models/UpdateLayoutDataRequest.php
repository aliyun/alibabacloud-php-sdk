<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Tea\Model;

class UpdateLayoutDataRequest extends Model
{
    /**
     * @var string
     */
    public $layoutData;

    /**
     * @var string
     */
    public $subSceneId;
    protected $_name = [
        'layoutData' => 'LayoutData',
        'subSceneId' => 'SubSceneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->layoutData) {
            $res['LayoutData'] = $this->layoutData;
        }
        if (null !== $this->subSceneId) {
            $res['SubSceneId'] = $this->subSceneId;
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
        if (isset($map['LayoutData'])) {
            $model->layoutData = $map['LayoutData'];
        }
        if (isset($map['SubSceneId'])) {
            $model->subSceneId = $map['SubSceneId'];
        }

        return $model;
    }
}
