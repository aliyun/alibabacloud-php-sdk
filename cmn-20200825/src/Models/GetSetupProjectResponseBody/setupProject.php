<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\GetSetupProjectResponseBody;

use AlibabaCloud\SDK\Cmn\V20200825\Models\GetSetupProjectResponseBody\setupProject\packages;
use AlibabaCloud\Tea\Model;

class setupProject extends Model
{
    /**
     * @description 代表创建时间的资源属性字段
     *
     * @example 2020-02-01
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 预计交付时间
     *
     * @example 2021-03-27 00:00:00
     *
     * @var string
     */
    public $deliveryTime;

    /**
     * @description 节点
     *
     * @example []
     *
     * @var string
     */
    public $nodes;

    /**
     * @description 套餐
     *
     * @var packages[]
     */
    public $packages;

    /**
     * @example build
     *
     * @var string
     */
    public $progress;

    /**
     * @description 代表资源一级ID的资源属性字段
     *
     * @example xxxyyy
     *
     * @var string
     */
    public $setupProjectId;

    /**
     * @description 物理空间uId
     *
     * @example xxxyyy
     *
     * @var string
     */
    public $spaceId;

    /**
     * @example WHHM
     *
     * @var string
     */
    public $spaceName;

    /**
     * @example 园区
     *
     * @var string
     */
    public $spaceType;
    protected $_name = [
        'createTime'     => 'CreateTime',
        'deliveryTime'   => 'DeliveryTime',
        'nodes'          => 'Nodes',
        'packages'       => 'Packages',
        'progress'       => 'Progress',
        'setupProjectId' => 'SetupProjectId',
        'spaceId'        => 'SpaceId',
        'spaceName'      => 'SpaceName',
        'spaceType'      => 'SpaceType',
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
        if (null !== $this->deliveryTime) {
            $res['DeliveryTime'] = $this->deliveryTime;
        }
        if (null !== $this->nodes) {
            $res['Nodes'] = $this->nodes;
        }
        if (null !== $this->packages) {
            $res['Packages'] = [];
            if (null !== $this->packages && \is_array($this->packages)) {
                $n = 0;
                foreach ($this->packages as $item) {
                    $res['Packages'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->setupProjectId) {
            $res['SetupProjectId'] = $this->setupProjectId;
        }
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }
        if (null !== $this->spaceName) {
            $res['SpaceName'] = $this->spaceName;
        }
        if (null !== $this->spaceType) {
            $res['SpaceType'] = $this->spaceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return setupProject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DeliveryTime'])) {
            $model->deliveryTime = $map['DeliveryTime'];
        }
        if (isset($map['Nodes'])) {
            $model->nodes = $map['Nodes'];
        }
        if (isset($map['Packages'])) {
            if (!empty($map['Packages'])) {
                $model->packages = [];
                $n               = 0;
                foreach ($map['Packages'] as $item) {
                    $model->packages[$n++] = null !== $item ? packages::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['SetupProjectId'])) {
            $model->setupProjectId = $map['SetupProjectId'];
        }
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }
        if (isset($map['SpaceName'])) {
            $model->spaceName = $map['SpaceName'];
        }
        if (isset($map['SpaceType'])) {
            $model->spaceType = $map['SpaceType'];
        }

        return $model;
    }
}
