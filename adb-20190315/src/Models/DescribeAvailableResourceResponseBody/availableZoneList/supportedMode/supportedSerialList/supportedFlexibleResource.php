<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAvailableResourceResponseBody\availableZoneList\supportedMode\supportedSerialList;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAvailableResourceResponseBody\availableZoneList\supportedMode\supportedSerialList\supportedFlexibleResource\supportedElasticIOResource;
use AlibabaCloud\Tea\Model;

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
     * @var string[]
     */
    public $supportedStorageResource;

    /**
     * @var supportedElasticIOResource
     */
    public $supportedElasticIOResource;
    protected $_name = [
        'storageType'                => 'StorageType',
        'supportedComputeResource'   => 'SupportedComputeResource',
        'supportedStorageResource'   => 'SupportedStorageResource',
        'supportedElasticIOResource' => 'SupportedElasticIOResource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->supportedComputeResource) {
            $res['SupportedComputeResource'] = $this->supportedComputeResource;
        }
        if (null !== $this->supportedStorageResource) {
            $res['SupportedStorageResource'] = $this->supportedStorageResource;
        }
        if (null !== $this->supportedElasticIOResource) {
            $res['SupportedElasticIOResource'] = null !== $this->supportedElasticIOResource ? $this->supportedElasticIOResource->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedFlexibleResource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['SupportedComputeResource'])) {
            if (!empty($map['SupportedComputeResource'])) {
                $model->supportedComputeResource = $map['SupportedComputeResource'];
            }
        }
        if (isset($map['SupportedStorageResource'])) {
            if (!empty($map['SupportedStorageResource'])) {
                $model->supportedStorageResource = $map['SupportedStorageResource'];
            }
        }
        if (isset($map['SupportedElasticIOResource'])) {
            $model->supportedElasticIOResource = supportedElasticIOResource::fromMap($map['SupportedElasticIOResource']);
        }

        return $model;
    }
}
