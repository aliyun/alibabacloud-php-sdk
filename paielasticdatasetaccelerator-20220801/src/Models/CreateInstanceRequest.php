<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models;

use AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\CreateInstanceRequest\tags;
use AlibabaCloud\Tea\Model;

class CreateInstanceRequest extends Model
{
    /**
     * @example 30.0G
     *
     * @var string
     */
    public $capacity;

    /**
     * @example xgboost数据集加速实例
     *
     * @var string
     */
    public $description;

    /**
     * @example 20
     *
     * @var string
     */
    public $maxEndpoint;

    /**
     * @example 20
     *
     * @var string
     */
    public $maxSlot;

    /**
     * @example acc_instance_1
     *
     * @var string
     */
    public $name;

    /**
     * @example PayAsYouGo
     *
     * @var string
     */
    public $paymentType;

    /**
     * @example Ecs
     *
     * @var string
     */
    public $providerType;

    /**
     * @example OSS
     *
     * @var string
     */
    public $storageType;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @example basic
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'capacity'     => 'Capacity',
        'description'  => 'Description',
        'maxEndpoint'  => 'MaxEndpoint',
        'maxSlot'      => 'MaxSlot',
        'name'         => 'Name',
        'paymentType'  => 'PaymentType',
        'providerType' => 'ProviderType',
        'storageType'  => 'StorageType',
        'tags'         => 'Tags',
        'type'         => 'Type',
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
        if (null !== $this->maxEndpoint) {
            $res['MaxEndpoint'] = $this->maxEndpoint;
        }
        if (null !== $this->maxSlot) {
            $res['MaxSlot'] = $this->maxSlot;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->paymentType) {
            $res['PaymentType'] = $this->paymentType;
        }
        if (null !== $this->providerType) {
            $res['ProviderType'] = $this->providerType;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateInstanceRequest
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
        if (isset($map['MaxEndpoint'])) {
            $model->maxEndpoint = $map['MaxEndpoint'];
        }
        if (isset($map['MaxSlot'])) {
            $model->maxSlot = $map['MaxSlot'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PaymentType'])) {
            $model->paymentType = $map['PaymentType'];
        }
        if (isset($map['ProviderType'])) {
            $model->providerType = $map['ProviderType'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
