<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\Tea\Model;

class DettachAssetGroupToInstanceShrinkRequest extends Model
{
    /**
     * @description The information about the asset that you want to dissociate.
     *
     * This parameter is required.
     * @var string
     */
    public $assetGroupListShrink;

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
        'assetGroupListShrink' => 'AssetGroupList',
        'instanceId'           => 'InstanceId',
        'regionId'             => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assetGroupListShrink) {
            $res['AssetGroupList'] = $this->assetGroupListShrink;
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
     * @return DettachAssetGroupToInstanceShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssetGroupList'])) {
            $model->assetGroupListShrink = $map['AssetGroupList'];
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
