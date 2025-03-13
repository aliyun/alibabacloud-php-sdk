<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ListDirectoryUsersRequest extends Model
{
    /**
     * @description > This parameter is not publicly available. The value can be 1 or left empty.
     *
     * @example 1
     *
     * @var string
     */
    public $assignedInfo;

    /**
     * @description The ID of the AD directory.
     *
     * This parameter is required.
     * @example cn-hangzhou+dir-jedbpr4sl9l37****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @description The query string for fuzzy match. If you specify this parameter, the system returns all results that contain the string.
     *
     * @example alice
     *
     * @var string
     */
    public $filter;

    /**
     * @description Specifies whether to return the users with assigned cloud computers only.
     *
     * @example true
     *
     * @var bool
     */
    public $includeAssignedUser;

    /**
     * @description The number of entries to return on each page.
     *
     * Default value: 10.
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token used to start the next query. If the value of this parameter is empty, all results are returned.
     *
     * @example caeba0bbb2be03f84eb48b699f0a4883
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The organizational unit (OU) in the specified AD domain.
     *
     * @example example.com/Domain Controllers
     *
     * @var string
     */
    public $OUPath;

    /**
     * @description The region ID. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/196646.html) operation to query the most recent region list.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The sort type.
     *
     * - desc: cloud computers assigned to users on top
     * @example asc
     *
     * @var string
     */
    public $sortType;
    protected $_name = [
        'assignedInfo'        => 'AssignedInfo',
        'directoryId'         => 'DirectoryId',
        'filter'              => 'Filter',
        'includeAssignedUser' => 'IncludeAssignedUser',
        'maxResults'          => 'MaxResults',
        'nextToken'           => 'NextToken',
        'OUPath'              => 'OUPath',
        'regionId'            => 'RegionId',
        'sortType'            => 'SortType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assignedInfo) {
            $res['AssignedInfo'] = $this->assignedInfo;
        }
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->filter) {
            $res['Filter'] = $this->filter;
        }
        if (null !== $this->includeAssignedUser) {
            $res['IncludeAssignedUser'] = $this->includeAssignedUser;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->OUPath) {
            $res['OUPath'] = $this->OUPath;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sortType) {
            $res['SortType'] = $this->sortType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDirectoryUsersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssignedInfo'])) {
            $model->assignedInfo = $map['AssignedInfo'];
        }
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['Filter'])) {
            $model->filter = $map['Filter'];
        }
        if (isset($map['IncludeAssignedUser'])) {
            $model->includeAssignedUser = $map['IncludeAssignedUser'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['OUPath'])) {
            $model->OUPath = $map['OUPath'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SortType'])) {
            $model->sortType = $map['SortType'];
        }

        return $model;
    }
}
