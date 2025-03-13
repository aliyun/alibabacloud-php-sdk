<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribePolicyGroupsRequest extends Model
{
    /**
     * @description The array of cloud computer policy IDs to be excluded.
     *
     * @var string[]
     */
    public $externalPolicyGroupIds;

    /**
     * @description The number of entries per page.
     *
     *   Valid values: 1 to 100
     *   Default value: 10
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. You do not need to specify this parameter for the first request. You must specify the token that is obtained from the previous query as the value of NextToken.
     *
     * @example caeba0bbb2be03f84eb48b699f0a4883
     *
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @description The IDs of the cloud computer policies.
     *
     * @example system-all-enabled-policy
     *
     * @var string[]
     */
    public $policyGroupId;

    /**
     * @description The region ID. You can call the [DescribeRegions](~~DescribeRegions~~) operation to query the regions supported by Elastic Desktop Service (EDS).
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The effective scope of the cloud computer policy.
     *
     * Valid values:
     *
     *   ALL
     *   IP
     *   GLOBAL
     *
     * @example ALL
     *
     * @var string
     */
    public $scope;
    protected $_name = [
        'externalPolicyGroupIds' => 'ExternalPolicyGroupIds',
        'maxResults'             => 'MaxResults',
        'nextToken'              => 'NextToken',
        'pageNumber'             => 'PageNumber',
        'pageSize'               => 'PageSize',
        'policyGroupId'          => 'PolicyGroupId',
        'regionId'               => 'RegionId',
        'scope'                  => 'Scope',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->externalPolicyGroupIds) {
            $res['ExternalPolicyGroupIds'] = $this->externalPolicyGroupIds;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->policyGroupId) {
            $res['PolicyGroupId'] = $this->policyGroupId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePolicyGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExternalPolicyGroupIds'])) {
            if (!empty($map['ExternalPolicyGroupIds'])) {
                $model->externalPolicyGroupIds = $map['ExternalPolicyGroupIds'];
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PolicyGroupId'])) {
            if (!empty($map['PolicyGroupId'])) {
                $model->policyGroupId = $map['PolicyGroupId'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }

        return $model;
    }
}
