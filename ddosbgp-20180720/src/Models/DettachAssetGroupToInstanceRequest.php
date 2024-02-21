<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DettachAssetGroupToInstanceRequest\assetGroupList;
use AlibabaCloud\Tea\Model;

class DettachAssetGroupToInstanceRequest extends Model
{
    /**
     * @description The information about the asset that you want to dissociate.
     *
     * @var assetGroupList[]
     */
    public $assetGroupList;

    /**
     * @description The ID of the instance.
     *
     * >  You can call the [DescribeInstanceList](~~118698~~) operation to query the IDs of all Anti-DDoS Origin instances of paid editions.
     * @example ddosbgp-xxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the region in which the instance resides.
     *
     * >  You can call the [DescribeRegions](~~118703~~) operation to query the most recent region list.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The source IP address of the request. The system specifies this parameter.
     *
     * @example 115.238.XX.XX
     *
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'assetGroupList' => 'AssetGroupList',
        'instanceId'     => 'InstanceId',
        'regionId'       => 'RegionId',
        'sourceIp'       => 'SourceIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assetGroupList) {
            $res['AssetGroupList'] = [];
            if (null !== $this->assetGroupList && \is_array($this->assetGroupList)) {
                $n = 0;
                foreach ($this->assetGroupList as $item) {
                    $res['AssetGroupList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DettachAssetGroupToInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssetGroupList'])) {
            if (!empty($map['AssetGroupList'])) {
                $model->assetGroupList = [];
                $n                     = 0;
                foreach ($map['AssetGroupList'] as $item) {
                    $model->assetGroupList[$n++] = null !== $item ? assetGroupList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
