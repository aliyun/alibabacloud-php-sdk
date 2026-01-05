<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\CreateSlotRequest\endpoints;
use AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\CreateSlotRequest\tags;

class CreateSlotRequest extends Model
{
    /**
     * @var string
     */
    public $capacity;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $endpointIds;

    /**
     * @var endpoints[]
     */
    public $endpoints;

    /**
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
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var string
     */
    public $storageUri;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'capacity' => 'Capacity',
        'description' => 'Description',
        'endpointIds' => 'EndpointIds',
        'endpoints' => 'Endpoints',
        'instanceId' => 'InstanceId',
        'ioType' => 'IoType',
        'lifeCycle' => 'LifeCycle',
        'name' => 'Name',
        'storageType' => 'StorageType',
        'storageUri' => 'StorageUri',
        'tags' => 'Tags',
    ];

    public function validate()
    {
        if (\is_array($this->endpoints)) {
            Model::validateArray($this->endpoints);
        }
        if (null !== $this->lifeCycle) {
            $this->lifeCycle->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->endpoints) {
            if (\is_array($this->endpoints)) {
                $res['Endpoints'] = [];
                $n1 = 0;
                foreach ($this->endpoints as $item1) {
                    $res['Endpoints'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->ioType) {
            $res['IoType'] = $this->ioType;
        }

        if (null !== $this->lifeCycle) {
            $res['LifeCycle'] = null !== $this->lifeCycle ? $this->lifeCycle->toArray($noStream) : $this->lifeCycle;
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
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['Endpoints'])) {
            if (!empty($map['Endpoints'])) {
                $model->endpoints = [];
                $n1 = 0;
                foreach ($map['Endpoints'] as $item1) {
                    $model->endpoints[$n1] = endpoints::fromMap($item1);
                    ++$n1;
                }
            }
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
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
