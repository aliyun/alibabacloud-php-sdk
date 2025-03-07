<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class SetDataShareInstanceShrinkRequest extends Model
{
    /**
     * @description The ID of the AnalyticDB for PostgreSQL instance in Serverless mode.
     *
     * This parameter is required.
     * @var string
     */
    public $instanceListShrink;

    /**
     * @description Specifies whether to enable or disable data sharing. Valid values:
     *
     *   **add**: enables data sharing.
     *   **remove**: disables data sharing.
     *
     * This parameter is required.
     * @example add
     *
     * @var string
     */
    public $operationType;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the region.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'instanceListShrink' => 'InstanceList',
        'operationType'      => 'OperationType',
        'ownerId'            => 'OwnerId',
        'regionId'           => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceListShrink) {
            $res['InstanceList'] = $this->instanceListShrink;
        }
        if (null !== $this->operationType) {
            $res['OperationType'] = $this->operationType;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetDataShareInstanceShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceList'])) {
            $model->instanceListShrink = $map['InstanceList'];
        }
        if (isset($map['OperationType'])) {
            $model->operationType = $map['OperationType'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
