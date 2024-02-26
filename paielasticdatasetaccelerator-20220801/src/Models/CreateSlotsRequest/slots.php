<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\CreateSlotsRequest;

use AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\CreateSlotsRequest\slots\tags;
use AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\SlotLifeCycle;
use AlibabaCloud\Tea\Model;

class slots extends Model
{
    /**
     * @example 30.0G
     *
     * @var string
     */
    public $capacity;

    /**
     * @example xgboost数据集加速槽
     *
     * @var string
     */
    public $description;

    /**
     * @example end-my1tk3jggooi5uwks5,end-n69468yvjz8d12as7d,end-tga4omjrepklkg1onn
     *
     * @var string
     */
    public $endpointIds;

    /**
     * @example inst-my1tk3jggooi5uwks5
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $ioType;

    /**
     * @var SlotLifeCycle
     */
    public $lifeCycle;

    /**
     * @example slot_1
     *
     * @var string
     */
    public $name;

    /**
     * @example OSS
     *
     * @var string
     */
    public $storageType;

    /**
     * @example oss://pai-vision-data-hz2.oss-cn-hangzhou-internal.aliyuncs.com/data/VOCdevkit/VOC2007/ImageSets/Main/val.txt
     *
     * @var string
     */
    public $storageUri;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'capacity'    => 'Capacity',
        'description' => 'Description',
        'endpointIds' => 'EndpointIds',
        'instanceId'  => 'InstanceId',
        'ioType'      => 'IoType',
        'lifeCycle'   => 'LifeCycle',
        'name'        => 'Name',
        'storageType' => 'StorageType',
        'storageUri'  => 'StorageUri',
        'tags'        => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->endpointIds) {
            $res['EndpointIds'] = $this->endpointIds;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ioType) {
            $res['IoType'] = $this->ioType;
        }
        if (null !== $this->lifeCycle) {
            $res['LifeCycle'] = null !== $this->lifeCycle ? $this->lifeCycle->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->storageUri) {
            $res['StorageUri'] = $this->storageUri;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return slots
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EndpointIds'])) {
            $model->endpointIds = $map['EndpointIds'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IoType'])) {
            $model->ioType = $map['IoType'];
        }
        if (isset($map['LifeCycle'])) {
            $model->lifeCycle = SlotLifeCycle::fromMap($map['LifeCycle']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['StorageUri'])) {
            $model->storageUri = $map['StorageUri'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
