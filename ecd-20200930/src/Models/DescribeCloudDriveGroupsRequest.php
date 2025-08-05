<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class DescribeCloudDriveGroupsRequest extends Model
{
    /**
     * @var string
     */
    public $cdsId;

    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string
     */
    public $directoryName;

    /**
     * @var string
     */
    public $driveStatus;

    /**
     * @var string
     */
    public $driveType;

    /**
     * @var string[]
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $groupType;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $parentGroupId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'cdsId' => 'CdsId',
        'directoryId' => 'DirectoryId',
        'directoryName' => 'DirectoryName',
        'driveStatus' => 'DriveStatus',
        'driveType' => 'DriveType',
        'groupId' => 'GroupId',
        'groupName' => 'GroupName',
        'groupType' => 'GroupType',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'parentGroupId' => 'ParentGroupId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->groupId)) {
            Model::validateArray($this->groupId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cdsId) {
            $res['CdsId'] = $this->cdsId;
        }

        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }

        if (null !== $this->directoryName) {
            $res['DirectoryName'] = $this->directoryName;
        }

        if (null !== $this->driveStatus) {
            $res['DriveStatus'] = $this->driveStatus;
        }

        if (null !== $this->driveType) {
            $res['DriveType'] = $this->driveType;
        }

        if (null !== $this->groupId) {
            if (\is_array($this->groupId)) {
                $res['GroupId'] = [];
                $n1 = 0;
                foreach ($this->groupId as $item1) {
                    $res['GroupId'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->groupType) {
            $res['GroupType'] = $this->groupType;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->parentGroupId) {
            $res['ParentGroupId'] = $this->parentGroupId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['CdsId'])) {
            $model->cdsId = $map['CdsId'];
        }

        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }

        if (isset($map['DirectoryName'])) {
            $model->directoryName = $map['DirectoryName'];
        }

        if (isset($map['DriveStatus'])) {
            $model->driveStatus = $map['DriveStatus'];
        }

        if (isset($map['DriveType'])) {
            $model->driveType = $map['DriveType'];
        }

        if (isset($map['GroupId'])) {
            if (!empty($map['GroupId'])) {
                $model->groupId = [];
                $n1 = 0;
                foreach ($map['GroupId'] as $item1) {
                    $model->groupId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['GroupType'])) {
            $model->groupType = $map['GroupType'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['ParentGroupId'])) {
            $model->parentGroupId = $map['ParentGroupId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
