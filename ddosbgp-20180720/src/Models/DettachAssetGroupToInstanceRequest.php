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
     * This parameter is required.
     * @var assetGroupList[]
     */
    public $assetGroupList;

    /**
     * @description The ID of the instance.
     *
     * This parameter is required.
     * @example ddosbgp-xxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the region in which the instance resides.
     *
     * >  You can call the [DescribeRegions](https://help.aliyun.com/document_detail/118703.html) operation to query the most recent region list.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'assetGroupList' => 'AssetGroupList',
        'instanceId'     => 'InstanceId',
        'regionId'       => 'RegionId',
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

        return $model;
    }
}
