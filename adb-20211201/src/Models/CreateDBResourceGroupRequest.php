<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\SDK\Adb\V20211201\Models\CreateDBResourceGroupRequest\rules;
use AlibabaCloud\Tea\Model;

class CreateDBResourceGroupRequest extends Model
{
    /**
     * @description A reserved parameter.
     *
     * @example N/A
     *
     * @var string
     */
    public $clusterMode;

    /**
     * @description A reserved parameter.
     *
     * @example N/A
     *
     * @var string
     */
    public $clusterSizeResource;

    /**
     * @description The ID of the AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *
     * @example amv-bp11q28kvl688****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description Specifies whether to enable the preemptible instance feature for the resource group. After you enable the preemptible instance feature, you are charged for resources at a lower unit price but the resources are probably released. You can enable the preemptible instance feature only for job resource groups. Valid values:
     *
     *   **True**
     *   **False**
     *
     * @example True
     *
     * @var bool
     */
    public $enableSpot;

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
     * @description A reserved parameter.
     *
     * @example N/A
     *
     * @var int
     */
    public $maxClusterCount;

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
     * @description A reserved parameter.
     *
     * @example N/A
     *
     * @var int
     */
    public $minClusterCount;

    /**
     * @description The minimum reserved computing resources. Unit: AnalyticDB Compute Units (ACUs).
     *
     *   When GroupType is set to Interactive, set this parameter to 16 ACUs.
     *   When GroupType is set to Job, set this parameter to 0 ACUs.
     *
     * @example 0
     *
     * @var string
     */
    public $minComputeResource;

    /**
     * @description The region ID of the cluster.
     *
     * >  You can call the [DescribeRegions](~~612393~~) operation to query the most recent region list.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The job resubmission rules.
     *
     * @var rules[]
     */
    public $rules;
    protected $_name = [
        'clusterMode'         => 'ClusterMode',
        'clusterSizeResource' => 'ClusterSizeResource',
        'DBClusterId'         => 'DBClusterId',
        'enableSpot'          => 'EnableSpot',
        'groupName'           => 'GroupName',
        'groupType'           => 'GroupType',
        'maxClusterCount'     => 'MaxClusterCount',
        'maxComputeResource'  => 'MaxComputeResource',
        'minClusterCount'     => 'MinClusterCount',
        'minComputeResource'  => 'MinComputeResource',
        'regionId'            => 'RegionId',
        'rules'               => 'Rules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterMode) {
            $res['ClusterMode'] = $this->clusterMode;
        }
        if (null !== $this->clusterSizeResource) {
            $res['ClusterSizeResource'] = $this->clusterSizeResource;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->enableSpot) {
            $res['EnableSpot'] = $this->enableSpot;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->groupType) {
            $res['GroupType'] = $this->groupType;
        }
        if (null !== $this->maxClusterCount) {
            $res['MaxClusterCount'] = $this->maxClusterCount;
        }
        if (null !== $this->maxComputeResource) {
            $res['MaxComputeResource'] = $this->maxComputeResource;
        }
        if (null !== $this->minClusterCount) {
            $res['MinClusterCount'] = $this->minClusterCount;
        }
        if (null !== $this->minComputeResource) {
            $res['MinComputeResource'] = $this->minComputeResource;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->rules) {
            $res['Rules'] = [];
            if (null !== $this->rules && \is_array($this->rules)) {
                $n = 0;
                foreach ($this->rules as $item) {
                    $res['Rules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['ClusterMode'])) {
            $model->clusterMode = $map['ClusterMode'];
        }
        if (isset($map['ClusterSizeResource'])) {
            $model->clusterSizeResource = $map['ClusterSizeResource'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['EnableSpot'])) {
            $model->enableSpot = $map['EnableSpot'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['GroupType'])) {
            $model->groupType = $map['GroupType'];
        }
        if (isset($map['MaxClusterCount'])) {
            $model->maxClusterCount = $map['MaxClusterCount'];
        }
        if (isset($map['MaxComputeResource'])) {
            $model->maxComputeResource = $map['MaxComputeResource'];
        }
        if (isset($map['MinClusterCount'])) {
            $model->minClusterCount = $map['MinClusterCount'];
        }
        if (isset($map['MinComputeResource'])) {
            $model->minComputeResource = $map['MinComputeResource'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Rules'])) {
            if (!empty($map['Rules'])) {
                $model->rules = [];
                $n            = 0;
                foreach ($map['Rules'] as $item) {
                    $model->rules[$n++] = null !== $item ? rules::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
