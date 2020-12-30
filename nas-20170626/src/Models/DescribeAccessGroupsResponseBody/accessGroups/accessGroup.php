<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAccessGroupsResponseBody\accessGroups;

use AlibabaCloud\Tea\Model;

class accessGroup extends Model
{
    /**
     * @var string
     */
    public $accessGroupName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $accessGroupType;

    /**
     * @var int
     */
    public $ruleCount;

    /**
     * @var int
     */
    public $mountTargetCount;
    protected $_name = [
        'accessGroupName'  => 'AccessGroupName',
        'description'      => 'Description',
        'accessGroupType'  => 'AccessGroupType',
        'ruleCount'        => 'RuleCount',
        'mountTargetCount' => 'MountTargetCount',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->accessGroupType) {
            $res['AccessGroupType'] = $this->accessGroupType;
        }
        if (null !== $this->ruleCount) {
            $res['RuleCount'] = $this->ruleCount;
        }
        if (null !== $this->mountTargetCount) {
            $res['MountTargetCount'] = $this->mountTargetCount;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['AccessGroupType'])) {
            $model->accessGroupType = $map['AccessGroupType'];
        }
        if (isset($map['RuleCount'])) {
            $model->ruleCount = $map['RuleCount'];
        }
        if (isset($map['MountTargetCount'])) {
            $model->mountTargetCount = $map['MountTargetCount'];
        }

        return $model;
    }
}
