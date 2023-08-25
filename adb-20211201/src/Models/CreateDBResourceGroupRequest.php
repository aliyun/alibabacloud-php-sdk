<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class CreateDBResourceGroupRequest extends Model
{
    /**
     * @description The ID of the AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *
     * @example amv-bp11q28kvl688****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The name of the resource group.
     *
     *   The name can be up to 255 characters in length.
     *   The name must start with a letter or a digit.
     *   The name can contain letters, digits, hyphens (\_), and underscores (\_).
     *
     * @example test_group
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The type of the resource group. Valid values:
     *
     *   **Interactive**
     *   **Job**
     *
     * > For information about resource groups of Data Lakehouse Edition, see [Resource groups](~~428610~~).
     * @example Job
     *
     * @var string
     */
    public $groupType;

    /**
     * @description The maximum reserved computing resources. Unit: ACU.
     *
     *   If GroupType is set to Interactive, the maximum amount of reserved computing resources refers to the amount of resources that are not allocated in the cluster. Set this parameter to a value in increments of 16 ACUs.
     *   If GroupType is set to Job, the maximum amount of reserved computing resources refers to the amount of resources that are not allocated in the cluster. Set this parameter to a value in increments of 8 ACUs.
     *
     * @example 48
     *
     * @var string
     */
    public $maxComputeResource;

    /**
     * @description The minimum reserved computing resources. Unit: AnalyticDB Compute Unit (ACU).
     *
     *   If GroupType is set to Interactive, set the value to 16ACU.
     *   If GroupType is set to Job, set the value to 0ACU.
     *
     * @example 0
     *
     * @var string
     */
    public $minComputeResource;
    protected $_name = [
        'DBClusterId'        => 'DBClusterId',
        'groupName'          => 'GroupName',
        'groupType'          => 'GroupType',
        'maxComputeResource' => 'MaxComputeResource',
        'minComputeResource' => 'MinComputeResource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->groupType) {
            $res['GroupType'] = $this->groupType;
        }
        if (null !== $this->maxComputeResource) {
            $res['MaxComputeResource'] = $this->maxComputeResource;
        }
        if (null !== $this->minComputeResource) {
            $res['MinComputeResource'] = $this->minComputeResource;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDBResourceGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['GroupType'])) {
            $model->groupType = $map['GroupType'];
        }
        if (isset($map['MaxComputeResource'])) {
            $model->maxComputeResource = $map['MaxComputeResource'];
        }
        if (isset($map['MinComputeResource'])) {
            $model->minComputeResource = $map['MinComputeResource'];
        }

        return $model;
    }
}
