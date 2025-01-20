<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAccessGroupsResponseBody\accessGroups;

use AlibabaCloud\Dara\Model;

class accessGroup extends Model
{
    /**
     * @var string
     */
    public $accessGroupName;
    /**
     * @var string
     */
    public $accessGroupType;
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $fileSystemType;
    /**
     * @var int
     */
    public $mountTargetCount;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var int
     */
    public $ruleCount;
    protected $_name = [
        'accessGroupName'  => 'AccessGroupName',
        'accessGroupType'  => 'AccessGroupType',
        'createTime'       => 'CreateTime',
        'description'      => 'Description',
        'fileSystemType'   => 'FileSystemType',
        'mountTargetCount' => 'MountTargetCount',
        'regionId'         => 'RegionId',
        'ruleCount'        => 'RuleCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->fileSystemType) {
            $res['FileSystemType'] = $this->fileSystemType;
        }

        if (null !== $this->mountTargetCount) {
            $res['MountTargetCount'] = $this->mountTargetCount;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->ruleCount) {
            $res['RuleCount'] = $this->ruleCount;
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

        if (isset($map['FileSystemType'])) {
            $model->fileSystemType = $map['FileSystemType'];
        }

        if (isset($map['MountTargetCount'])) {
            $model->mountTargetCount = $map['MountTargetCount'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RuleCount'])) {
            $model->ruleCount = $map['RuleCount'];
        }

        return $model;
    }
}
