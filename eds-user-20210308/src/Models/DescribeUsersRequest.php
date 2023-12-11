<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Tea\Model;

class DescribeUsersRequest extends Model
{
    /**
     * @var string
     */
    public $bizType;

    /**
     * @description The list of usernames that must be exactly matched.
     *
     * @var string[]
     */
    public $endUserIds;

    /**
     * @description The list of usernames to be exactly excluded.
     *
     * @var string[]
     */
    public $excludeEndUserIds;

    /**
     * @description The string that is used for fuzzy search. You perform fuzzy search by username (EndUserId) and email address (Email). Wildcard characters (\*) are supported. For example, if you set this parameter to `a*m`, usernames or email addresses that start with `a` and end with `m` are returned.
     *
     * @example a*m
     *
     * @var string
     */
    public $filter;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @description The number of entries per page.
     *
     *   Valid values: 1 to 500
     *   Default value: 500
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. You do not need to specify this parameter for the first request.\
     * If not all results are returned in a query, a value is returned for the NextToken parameter. In this case, you can use the return value of NextToken to perform the next query.
     * @example caeba0bbb2be03f84eb48b699f0a****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the organization in which you want to query users.
     *
     * @example org-4mdgc1cocc59z****
     *
     * @var string
     */
    public $orgId;

    /**
     * @var string
     */
    public $solutionId;
    protected $_name = [
        'bizType'           => 'BizType',
        'endUserIds'        => 'EndUserIds',
        'excludeEndUserIds' => 'ExcludeEndUserIds',
        'filter'            => 'Filter',
        'groupId'           => 'GroupId',
        'maxResults'        => 'MaxResults',
        'nextToken'         => 'NextToken',
        'orgId'             => 'OrgId',
        'solutionId'        => 'SolutionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->endUserIds) {
            $res['EndUserIds'] = $this->endUserIds;
        }
        if (null !== $this->excludeEndUserIds) {
            $res['ExcludeEndUserIds'] = $this->excludeEndUserIds;
        }
        if (null !== $this->filter) {
            $res['Filter'] = $this->filter;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }
        if (null !== $this->solutionId) {
            $res['SolutionId'] = $this->solutionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUsersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['EndUserIds'])) {
            if (!empty($map['EndUserIds'])) {
                $model->endUserIds = $map['EndUserIds'];
            }
        }
        if (isset($map['ExcludeEndUserIds'])) {
            if (!empty($map['ExcludeEndUserIds'])) {
                $model->excludeEndUserIds = $map['ExcludeEndUserIds'];
            }
        }
        if (isset($map['Filter'])) {
            $model->filter = $map['Filter'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }
        if (isset($map['SolutionId'])) {
            $model->solutionId = $map['SolutionId'];
        }

        return $model;
    }
}
