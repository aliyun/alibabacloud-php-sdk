<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class AddTagToFlinkClusterRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example c5defa51f******c92bd2ef5fb093269
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description This parameter is required.
     *
     * @example ab18f***93744d
     *
     * @var string
     */
    public $flinkWorkSpaceId;

    /**
     * @description This parameter is required.
     *
     * @example flink-demo
     *
     * @var string
     */
    public $flinkWorkSpaceName;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example rg-acfmxyexli2****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description This parameter is required.
     *
     * @example 198608******7619
     *
     * @var string
     */
    public $targetUserId;
    protected $_name = [
        'clusterId'          => 'ClusterId',
        'flinkWorkSpaceId'   => 'FlinkWorkSpaceId',
        'flinkWorkSpaceName' => 'FlinkWorkSpaceName',
        'regionId'           => 'RegionId',
        'resourceGroupId'    => 'ResourceGroupId',
        'targetUserId'       => 'TargetUserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->flinkWorkSpaceId) {
            $res['FlinkWorkSpaceId'] = $this->flinkWorkSpaceId;
        }
        if (null !== $this->flinkWorkSpaceName) {
            $res['FlinkWorkSpaceName'] = $this->flinkWorkSpaceName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->targetUserId) {
            $res['TargetUserId'] = $this->targetUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddTagToFlinkClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['FlinkWorkSpaceId'])) {
            $model->flinkWorkSpaceId = $map['FlinkWorkSpaceId'];
        }
        if (isset($map['FlinkWorkSpaceName'])) {
            $model->flinkWorkSpaceName = $map['FlinkWorkSpaceName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['TargetUserId'])) {
            $model->targetUserId = $map['TargetUserId'];
        }

        return $model;
    }
}
