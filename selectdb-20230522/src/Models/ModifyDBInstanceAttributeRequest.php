<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBInstanceAttributeRequest extends Model
{
    /**
     * @description The instance ID.
     *
     * This parameter is required.
     *
     * @example selectdb-cn-7213cjv****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The instance parameter to be modified. Valid values:
     *
     *   **MaintainTime**: Modify the maintenance window of the instance in the hh:mm-hh:mm format.
     *   **DBInstanceDescription**: Modify the description of the instance.
     *
     * This parameter is required.
     *
     * @example DBInstanceDescription
     *
     * @var string
     */
    public $instanceAttributeType;

    /**
     * @description The region ID of the instance.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The new value of the instance parameter to be modified. Examples:
     *
     *   If InstanceAttributeType is set to MaintainTime, you can set Value to 00:00-06:00.
     *   If InstanceAttributeType is set to DBInstanceDescription, you can set Value to testdb.
     *
     * This parameter is required.
     *
     * @example testdb01
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'instanceAttributeType' => 'InstanceAttributeType',
        'regionId' => 'RegionId',
        'resourceOwnerId' => 'ResourceOwnerId',
        'value' => 'Value',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->instanceAttributeType) {
            $res['InstanceAttributeType'] = $this->instanceAttributeType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDBInstanceAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['InstanceAttributeType'])) {
            $model->instanceAttributeType = $map['InstanceAttributeType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
