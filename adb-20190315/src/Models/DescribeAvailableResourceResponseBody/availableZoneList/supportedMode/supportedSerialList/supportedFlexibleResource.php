<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAvailableResourceResponseBody\availableZoneList\supportedMode\supportedSerialList;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAvailableResourceResponseBody\availableZoneList\supportedMode\supportedSerialList\supportedFlexibleResource\supportedElasticIOResource;
use AlibabaCloud\Tea\Model;

class supportedFlexibleResource extends Model
{
    /**
     * @description The disk storage type. Valid values:
     *
     *   **hdd**
     *   **ssd**
     *
     * @example hdd
     *
     * @var string
     */
    public $storageType;

    /**
     * @description The supported computing resources.
     *
     * @var string[]
     */
    public $supportedComputeResource;

    /**
     * @description The supported elastic I/O resources.
     *
     * @var supportedElasticIOResource
     */
    public $supportedElasticIOResource;

    /**
     * @description The supported storage resources.
     *
     * @var string[]
     */
    public $supportedStorageResource;
    protected $_name = [
        'storageType'                => 'StorageType',
        'supportedComputeResource'   => 'SupportedComputeResource',
        'supportedElasticIOResource' => 'SupportedElasticIOResource',
        'supportedStorageResource'   => 'SupportedStorageResource',
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
        if (null !== $this->supportedElasticIOResource) {
            $res['SupportedElasticIOResource'] = null !== $this->supportedElasticIOResource ? $this->supportedElasticIOResource->toMap() : null;
        }
        if (null !== $this->supportedStorageResource) {
            $res['SupportedStorageResource'] = $this->supportedStorageResource;
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
        if (isset($map['SupportedElasticIOResource'])) {
            $model->supportedElasticIOResource = supportedElasticIOResource::fromMap($map['SupportedElasticIOResource']);
        }
        if (isset($map['SupportedStorageResource'])) {
            if (!empty($map['SupportedStorageResource'])) {
                $model->supportedStorageResource = $map['SupportedStorageResource'];
            }
        }

        return $model;
    }
}
