<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBResourceGroupResponseBody;

use AlibabaCloud\Tea\Model;

class groupsInfo extends Model
{
    /**
     * @description The time when the resource group was created. The time follows the ISO 8601 standard in the *yyyy-MM-ddTHH:mm:ssZ* format. The time is displayed in UTC.
     *
     * @example 2022-08-29T03:34:30Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The amount of minimum elastic computing resources. Unit: ACU.
     *
     * @example 16ACU
     *
     * @var string
     */
    public $elasticMinComputeResource;

    /**
     * @description The name of the resource group.
     *
     * @example test1
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
     * @description The Resource Access Management (RAM) user with which the resource group is associated.
     *
     * @example testb,testc
     *
     * @var string
     */
    public $groupUsers;

    /**
     * @description The maximum amount of reserved computing resources. Unit: ACU.
     *
     * @example 512ACU
     *
     * @var string
     */
    public $maxComputeResource;

    /**
     * @description The minimum amount of reserved computing resources. Unit: AnalyticDB compute unit (ACU).
     *
     * @example 0ACU
     *
     * @var string
     */
    public $minComputeResource;

    /**
     * @description The state of the resource group. Valid values:
     *
     *   **creating**
     *   **ok**
     *   **pendingdelete**
     *
     * @example ok
     *
     * @var string
     */
    public $status;

    /**
     * @description The time when the resource group was updated. The time follows the ISO 8601 standard in the *yyyy-MM-ddTHH:mm:ssZ* format. The time is displayed in UTC.
     *
     * @example 2022-08-31T03:34:30Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime'                => 'CreateTime',
        'elasticMinComputeResource' => 'ElasticMinComputeResource',
        'groupName'                 => 'GroupName',
        'groupType'                 => 'GroupType',
        'groupUsers'                => 'GroupUsers',
        'maxComputeResource'        => 'MaxComputeResource',
        'minComputeResource'        => 'MinComputeResource',
        'status'                    => 'Status',
        'updateTime'                => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->elasticMinComputeResource) {
            $res['ElasticMinComputeResource'] = $this->elasticMinComputeResource;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->groupType) {
            $res['GroupType'] = $this->groupType;
        }
        if (null !== $this->groupUsers) {
            $res['GroupUsers'] = $this->groupUsers;
        }
        if (null !== $this->maxComputeResource) {
            $res['MaxComputeResource'] = $this->maxComputeResource;
        }
        if (null !== $this->minComputeResource) {
            $res['MinComputeResource'] = $this->minComputeResource;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return groupsInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ElasticMinComputeResource'])) {
            $model->elasticMinComputeResource = $map['ElasticMinComputeResource'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['GroupType'])) {
            $model->groupType = $map['GroupType'];
        }
        if (isset($map['GroupUsers'])) {
            $model->groupUsers = $map['GroupUsers'];
        }
        if (isset($map['MaxComputeResource'])) {
            $model->maxComputeResource = $map['MaxComputeResource'];
        }
        if (isset($map['MinComputeResource'])) {
            $model->minComputeResource = $map['MinComputeResource'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
