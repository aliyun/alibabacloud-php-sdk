<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ModifyDtsJobDedicatedClusterRequest extends Model
{
    /**
     * @description The dedicated cluster ID.
     *
     * @example dtsxxxx
     *
     * @var string
     */
    public $dedicatedClusterId;

    /**
     * @description The DTS task IDs. The value can be a JSON array that consists of multiple DTS task IDs. Separate the IDs with commas (,).
     *
     * @example ["dtsxxxx01", "dtsxxx02"]
     *
     * @var string
     */
    public $dtsJobIds;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @description The ID of the region where the DTS instance resides.
     *
     * > For information about the regions that support dedicated clusters, see [DTS dedicated cluster](https://help.aliyun.com/document_detail/417481.html).
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resource group ID.
     *
     * @example rg-acfmzawhxxc****
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'dedicatedClusterId' => 'DedicatedClusterId',
        'dtsJobIds'          => 'DtsJobIds',
        'ownerId'            => 'OwnerId',
        'regionId'           => 'RegionId',
        'resourceGroupId'    => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dedicatedClusterId) {
            $res['DedicatedClusterId'] = $this->dedicatedClusterId;
        }
        if (null !== $this->dtsJobIds) {
            $res['DtsJobIds'] = $this->dtsJobIds;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDtsJobDedicatedClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DedicatedClusterId'])) {
            $model->dedicatedClusterId = $map['DedicatedClusterId'];
        }
        if (isset($map['DtsJobIds'])) {
            $model->dtsJobIds = $map['DtsJobIds'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
