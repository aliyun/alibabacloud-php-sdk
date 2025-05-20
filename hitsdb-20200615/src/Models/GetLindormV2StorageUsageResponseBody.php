<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models;

use AlibabaCloud\Dara\Model;

class GetLindormV2StorageUsageResponseBody extends Model
{
    /**
     * @var string
     */
    public $accessDeniedDetail;

    /**
     * @var mixed[][]
     */
    public $capacityByDiskCategory;

    /**
     * @var mixed[]
     */
    public $instanceStorageZoneMap;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mixed[][]
     */
    public $usageByDiskCategory;
    protected $_name = [
        'accessDeniedDetail' => 'AccessDeniedDetail',
        'capacityByDiskCategory' => 'CapacityByDiskCategory',
        'instanceStorageZoneMap' => 'InstanceStorageZoneMap',
        'requestId' => 'RequestId',
        'usageByDiskCategory' => 'UsageByDiskCategory',
    ];

    public function validate()
    {
        if (\is_array($this->capacityByDiskCategory)) {
            Model::validateArray($this->capacityByDiskCategory);
        }
        if (\is_array($this->instanceStorageZoneMap)) {
            Model::validateArray($this->instanceStorageZoneMap);
        }
        if (\is_array($this->usageByDiskCategory)) {
            Model::validateArray($this->usageByDiskCategory);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessDeniedDetail) {
            $res['AccessDeniedDetail'] = $this->accessDeniedDetail;
        }

        if (null !== $this->capacityByDiskCategory) {
            if (\is_array($this->capacityByDiskCategory)) {
                $res['CapacityByDiskCategory'] = [];
                $n1 = 0;
                foreach ($this->capacityByDiskCategory as $item1) {
                    if (\is_array($item1)) {
                        $res['CapacityByDiskCategory'][$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['CapacityByDiskCategory'][$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        if (null !== $this->instanceStorageZoneMap) {
            if (\is_array($this->instanceStorageZoneMap)) {
                $res['InstanceStorageZoneMap'] = [];
                foreach ($this->instanceStorageZoneMap as $key1 => $value1) {
                    $res['InstanceStorageZoneMap'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->usageByDiskCategory) {
            if (\is_array($this->usageByDiskCategory)) {
                $res['UsageByDiskCategory'] = [];
                $n1 = 0;
                foreach ($this->usageByDiskCategory as $item1) {
                    if (\is_array($item1)) {
                        $res['UsageByDiskCategory'][$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['UsageByDiskCategory'][$n1++][$key2] = $value2;
                        }
                    }
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
        if (isset($map['AccessDeniedDetail'])) {
            $model->accessDeniedDetail = $map['AccessDeniedDetail'];
        }

        if (isset($map['CapacityByDiskCategory'])) {
            if (!empty($map['CapacityByDiskCategory'])) {
                $model->capacityByDiskCategory = [];
                $n1 = 0;
                foreach ($map['CapacityByDiskCategory'] as $item1) {
                    if (!empty($item1)) {
                        $model->capacityByDiskCategory[$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->capacityByDiskCategory[$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        if (isset($map['InstanceStorageZoneMap'])) {
            if (!empty($map['InstanceStorageZoneMap'])) {
                $model->instanceStorageZoneMap = [];
                foreach ($map['InstanceStorageZoneMap'] as $key1 => $value1) {
                    $model->instanceStorageZoneMap[$key1] = $value1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['UsageByDiskCategory'])) {
            if (!empty($map['UsageByDiskCategory'])) {
                $model->usageByDiskCategory = [];
                $n1 = 0;
                foreach ($map['UsageByDiskCategory'] as $item1) {
                    if (!empty($item1)) {
                        $model->usageByDiskCategory[$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->usageByDiskCategory[$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        return $model;
    }
}
