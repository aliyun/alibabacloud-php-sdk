<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\UpdateSpaceModelRequest\sort;
use AlibabaCloud\Tea\Model;

class UpdateSpaceModelRequest extends Model
{
    /**
     * @example instanceId
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description 层级
     *
     * @var sort[]
     */
    public $sort;

    /**
     * @example spaceModelIdxxxyyy
     *
     * @var string
     */
    public $spaceModelId;

    /**
     * @example 园区
     *
     * @var string
     */
    public $spaceType;
    protected $_name = [
        'instanceId'   => 'InstanceId',
        'sort'         => 'Sort',
        'spaceModelId' => 'SpaceModelId',
        'spaceType'    => 'SpaceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSpaceModelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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

        return $model;
    }
}
