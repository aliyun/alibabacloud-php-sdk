<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\GetSpaceModelResponseBody;

use AlibabaCloud\SDK\Cmn\V20200825\Models\GetSpaceModelResponseBody\spaceModel\sort;
use AlibabaCloud\Tea\Model;

class spaceModel extends Model
{
    /**
     * @description 创建时间
     *
     * @example 2020-12-22 10:39:17
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 模型实例
     *
     * @example {}
     *
     * @var sort[]
     */
    public $sort;

    /**
     * @description 物理空间模型id
     *
     * @example xxx_yyy
     *
     * @var string
     */
    public $spaceModelId;

    /**
     * @description 物理空间类型
     *
     * @example 园区
     *
     * @var string
     */
    public $spaceType;

    /**
     * @description 模型状态
     *
     * @example LOCK
     *
     * @var string
     */
    public $status;

    /**
     * @description 更新时间
     *
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
