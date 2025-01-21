<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class AddTagToFlinkClusterRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;
    /**
     * @var string
     */
    public $flinkWorkSpaceId;
    /**
     * @var string
     */
    public $flinkWorkSpaceName;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
