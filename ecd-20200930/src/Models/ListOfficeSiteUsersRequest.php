<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ListOfficeSiteUsersRequest extends Model
{
    /**
     * @var string
     */
    public $assignedInfo;

    /**
     * @description The query string for fuzzy query.
     *
     * @example *jin*
     *
     * @var string
     */
    public $filter;

    /**
     * @var bool
     */
    public $includeAssignedUser;

    /**
     * @description The number of entries per page.
     *
     *   Valid values: 1 to 100.
     *   Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. You do not need to specify this parameter for the first request or if no next query exists. You must specify the token that is obtained from the previous query as the value of NextToken.
     *
     * @example caeba0bbb2be03f84eb48b699f0a4883
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The organizational unit (OU) of the specified AD domain.
     *
     * @example example.com/Domain Controllers
     *
     * @var string
     */
    public $OUPath;

    /**
     * @description The office network ID. The office network must be of the enterprise AD account type.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou+dir-363353****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @description The region ID. You can call the [DescribeRegions](~~DescribeRegions~~) operation to query the list of regions where Elastic Desktop Service (EDS) Enterprise is available.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $sortType;
    protected $_name = [
        'assignedInfo' => 'AssignedInfo',
        'filter' => 'Filter',
        'includeAssignedUser' => 'IncludeAssignedUser',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'OUPath' => 'OUPath',
        'officeSiteId' => 'OfficeSiteId',
        'regionId' => 'RegionId',
        'sortType' => 'SortType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->assignedInfo) {
            $res['AssignedInfo'] = $this->assignedInfo;
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
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
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
     * @return ListOfficeSiteUsersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssignedInfo'])) {
            $model->assignedInfo = $map['AssignedInfo'];
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
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
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
