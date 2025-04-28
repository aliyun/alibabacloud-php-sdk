<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAvailableResourceResponseBody\availableZoneList\supportedMode\supportedSerialList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAvailableResourceResponseBody\availableZoneList\supportedMode\supportedSerialList\supportedFlexibleResource\supportedElasticIOResource;

class supportedFlexibleResource extends Model
{
    /**
     * @var string
     */
    public $storageType;

    /**
     * @var string[]
     */
    public $supportedComputeResource;

    /**
     * @var supportedElasticIOResource
     */
    public $supportedElasticIOResource;

    /**
     * @var string[]
     */
    public $supportedStorageResource;
    protected $_name = [
        'storageType' => 'StorageType',
        'supportedComputeResource' => 'SupportedComputeResource',
        'supportedElasticIOResource' => 'SupportedElasticIOResource',
        'supportedStorageResource' => 'SupportedStorageResource',
    ];

    public function validate()
    {
        if (\is_array($this->supportedComputeResource)) {
            Model::validateArray($this->supportedComputeResource);
        }
        if (null !== $this->supportedElasticIOResource) {
            $this->supportedElasticIOResource->validate();
        }
        if (\is_array($this->supportedStorageResource)) {
            Model::validateArray($this->supportedStorageResource);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }

        if (null !== $this->supportedComputeResource) {
            if (\is_array($this->supportedComputeResource)) {
                $res['SupportedComputeResource'] = [];
                $n1 = 0;
                foreach ($this->supportedComputeResource as $item1) {
                    $res['SupportedComputeResource'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->supportedElasticIOResource) {
            $res['SupportedElasticIOResource'] = null !== $this->supportedElasticIOResource ? $this->supportedElasticIOResource->toArray($noStream) : $this->supportedElasticIOResource;
        }

        if (null !== $this->supportedStorageResource) {
            if (\is_array($this->supportedStorageResource)) {
                $res['SupportedStorageResource'] = [];
                $n1 = 0;
                foreach ($this->supportedStorageResource as $item1) {
                    $res['SupportedStorageResource'][$n1++] = $item1;
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
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        if (isset($map['SupportedComputeResource'])) {
            if (!empty($map['SupportedComputeResource'])) {
                $model->supportedComputeResource = [];
                $n1 = 0;
                foreach ($map['SupportedComputeResource'] as $item1) {
                    $model->supportedComputeResource[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SupportedElasticIOResource'])) {
            $model->supportedElasticIOResource = supportedElasticIOResource::fromMap($map['SupportedElasticIOResource']);
        }

        if (isset($map['SupportedStorageResource'])) {
            if (!empty($map['SupportedStorageResource'])) {
                $model->supportedStorageResource = [];
                $n1 = 0;
                foreach ($map['SupportedStorageResource'] as $item1) {
                    $model->supportedStorageResource[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
