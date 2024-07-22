<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Tea\Model;

class ListAsynJobsRequest extends Model
{
    /**
     * @description The name of the operation.
     *
     * @example CreateLoadBalancer
     *
     * @var string
     */
    public $apiName;

    /**
     * @description The timestamp that indicates the start time of the task. Unit: milliseconds.
     *
     * Specify the timestamp in the Unix format to indicate the total amount of time that is from 00:00:00 (UTC+0) on January 1, 1970 to when the status of the asynchronous task is queried.
     * @example 2021-06-03T17:22Z
     *
     * @var int
     */
    public $beginTime;

    /**
     * @description The timestamp that indicates the end time of the task. Unit: milliseconds.
     *
     * Specify the timestamp in the Unix format to indicate the total amount of time that is from 00:00:00 (UTC+0) on January 1, 1970 to when the status of the asynchronous task is returned.
     * @example 2021-06-04T17:22Z
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The asynchronous task IDs.
     *
     * @var string[]
     */
    public $jobIds;

    /**
     * @description The number of entries per page. Valid values: **1** to **100**. Default value: **20**.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. Valid values:
     *
     *   You do not need to specify this parameter for the first request.
     *   You must specify the token that is obtained from the previous query as the value of **NextToken**.
     *
     * @example FFmyTO70tTpLG6I3FmYAXGKPd****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The resource IDs.
     *
     * @var string[]
     */
    public $resourceIds;

    /**
     * @description The type of the associated resource. Valid values:
     *
     *   **loadbalancer**: an Application Load Balancer (ALB) instance
     *   **listener**: a listener
     *   **rule**: a forwarding rule
     *   **acl**: an access control list (ACL)
     *   **securitypolicy**: a security policy
     *   **servergroup**: a server group
     *
     * @example acl
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'apiName'      => 'ApiName',
        'beginTime'    => 'BeginTime',
        'endTime'      => 'EndTime',
        'jobIds'       => 'JobIds',
        'maxResults'   => 'MaxResults',
        'nextToken'    => 'NextToken',
        'resourceIds'  => 'ResourceIds',
        'resourceType' => 'ResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->jobIds) {
            $res['JobIds'] = $this->jobIds;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->resourceIds) {
            $res['ResourceIds'] = $this->resourceIds;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAsynJobsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['JobIds'])) {
            if (!empty($map['JobIds'])) {
                $model->jobIds = $map['JobIds'];
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['ResourceIds'])) {
            if (!empty($map['ResourceIds'])) {
                $model->resourceIds = $map['ResourceIds'];
            }
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
