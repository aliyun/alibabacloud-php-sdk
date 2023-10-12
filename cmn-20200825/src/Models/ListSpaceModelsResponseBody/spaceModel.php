<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\ListSpaceModelsResponseBody;

use AlibabaCloud\SDK\Cmn\V20200825\Models\ListSpaceModelsResponseBody\spaceModel\sort;
use AlibabaCloud\Tea\Model;

class spaceModel extends Model
{
    /**
     * @example 2020-12-22 10:39:17
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 层级
     *
     * @var sort[]
     */
    public $sort;

    /**
     * @description 代表资源一级ID的资源属性字段
     *
     * @var string
     */
    public $spaceModelId;

    /**
     * @description 物理空间类型
     *
     * @example xxxyyy
     *
     * @var string
     */
    public $spaceType;

    /**
     * @example LOCK
     *
     * @var string
     */
    public $status;

    /**
     * @example 2020-12-22 10:39:17
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime'   => 'CreateTime',
        'sort'         => 'Sort',
        'spaceModelId' => 'SpaceModelId',
        'spaceType'    => 'SpaceType',
        'status'       => 'Status',
        'updateTime'   => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->sort) {
            $res['Sort'] = [];
            if (null !== $this->sort && \is_array($this->sort)) {
                $n = 0;
                foreach ($this->sort as $item) {
                    $res['Sort'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->spaceModelId) {
            $res['SpaceModelId'] = $this->spaceModelId;
        }
        if (null !== $this->spaceType) {
            $res['SpaceType'] = $this->spaceType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return spaceModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Sort'])) {
            if (!empty($map['Sort'])) {
                $model->sort = [];
                $n           = 0;
                foreach ($map['Sort'] as $item) {
                    $model->sort[$n++] = null !== $item ? sort::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SpaceModelId'])) {
            $model->spaceModelId = $map['SpaceModelId'];
        }
        if (isset($map['SpaceType'])) {
            $model->spaceType = $map['SpaceType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
