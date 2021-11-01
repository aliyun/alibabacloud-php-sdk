<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ListSubSceneRequest extends Model
{
    /**
     * @description 页码
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description 页长
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 场景ID
     *
     * @var string
     */
    public $sceneId;

    /**
     * @var bool
     */
    public $showLayoutData;
    protected $_name = [
        'pageNum'        => 'PageNum',
        'pageSize'       => 'PageSize',
        'sceneId'        => 'SceneId',
        'showLayoutData' => 'ShowLayoutData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }
        if (null !== $this->showLayoutData) {
            $res['ShowLayoutData'] = $this->showLayoutData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSubSceneRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }
        if (isset($map['ShowLayoutData'])) {
            $model->showLayoutData = $map['ShowLayoutData'];
        }

        return $model;
    }
}
