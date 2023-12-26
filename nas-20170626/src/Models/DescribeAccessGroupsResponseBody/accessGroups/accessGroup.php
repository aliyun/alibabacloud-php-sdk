<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAccessGroupsResponseBody\accessGroups;

use AlibabaCloud\Tea\Model;

class accessGroup extends Model
{
    /**
     * @description The name of the permission group.
     *
     * @example DEFAULT_VPC_GROUP_NAME
     *
     * @var string
     */
    public $accessGroupName;

    /**
     * @description The network type of the permission group. Valid value: **Vpc**.
     *
     * @example Vpc
     *
     * @var string
     */
    public $accessGroupType;

    /**
     * @description The time when the permission group was created.
     *
     * @example 2020-01-05T16:00:00Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The description of the permission group.
     *
     * @example This is a test access group.
     *
     * @var string
     */
    public $description;

    /**
     * @description The number of mount targets to which the permission group is attached.
     *
     * @example 0
     *
     * @var int
     */
    public $mountTargetCount;

    /**
     * @description The total number of rules in the permission group.
     *
     * @example 0
     *
     * @var int
     */
    public $ruleCount;
    protected $_name = [
        'accessGroupName'  => 'AccessGroupName',
        'accessGroupType'  => 'AccessGroupType',
        'createTime'       => 'CreateTime',
        'description'      => 'Description',
        'mountTargetCount' => 'MountTargetCount',
        'ruleCount'        => 'RuleCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessGroupName) {
            $res['AccessGroupName'] = $this->accessGroupName;
        }
        if (null !== $this->accessGroupType) {
            $res['AccessGroupType'] = $this->accessGroupType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->mountTargetCount) {
            $res['MountTargetCount'] = $this->mountTargetCount;
        }
        if (null !== $this->ruleCount) {
            $res['RuleCount'] = $this->ruleCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accessGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessGroupName'])) {
            $model->accessGroupName = $map['AccessGroupName'];
        }
        if (isset($map['AccessGroupType'])) {
            $model->accessGroupType = $map['AccessGroupType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['MountTargetCount'])) {
            $model->mountTargetCount = $map['MountTargetCount'];
        }
        if (isset($map['RuleCount'])) {
            $model->ruleCount = $map['RuleCount'];
        }

        return $model;
    }
}
