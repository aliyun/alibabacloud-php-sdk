<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorJobsRequest\endRange;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorJobsRequest\startRange;
use AlibabaCloud\Tea\Model;

class ListDoctorJobsRequest extends Model
{
    /**
     * @description The IDs of the jobs that are submitted to YARN.
     *
     * @example null
     *
     * @var string[]
     */
    public $appIds;

    /**
     * @description The cluster ID.
     *
     * This parameter is required.
     * @example c-b933c5aac8fe****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The range of end time. You can filter jobs whose end time falls within the specified time range.
     *
     * @var endRange
     */
    public $endRange;

    /**
     * @description The maximum number of entries to return on each page.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the request to retrieve a new page of results.
     *
     * @example DD6B1B2A-5837-5237-ABE4-FF0C89568980
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The field that you use to sort the query results. Valid values:
     *
     *   vcoreSeconds: the aggregated number of vCPUs that are allocated to the job multiplied by the number of seconds the job has been running
     *   memSeconds: the aggregated amount of memory that is allocated to the job multiplied by the number of seconds the job has been running
     *
     * @example vcoreSeconds
     *
     * @var string
     */
    public $orderBy;

    /**
     * @description The order in which you want to sort the query results. Valid values:
     *
     *   ASC: the ascending order
     *   DESC: the descending order
     *
     * @example ASC
     *
     * @var string
     */
    public $orderType;

    /**
     * @description The YARN queues to which the jobs are submitted.
     *
     * @example null
     *
     * @var string[]
     */
    public $queues;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The range of start time. You can filter jobs whose start time falls within the specified time range.
     *
     * @var startRange
     */
    public $startRange;

    /**
     * @description The YARN engines to which the jobs are submitted.
     *
     * @example null
     *
     * @var string[]
     */
    public $types;

    /**
     * @description The users who submit the jobs.
     *
     * @example null
     *
     * @var string[]
     */
    public $users;
    protected $_name = [
        'appIds'     => 'AppIds',
        'clusterId'  => 'ClusterId',
        'endRange'   => 'EndRange',
        'maxResults' => 'MaxResults',
        'nextToken'  => 'NextToken',
        'orderBy'    => 'OrderBy',
        'orderType'  => 'OrderType',
        'queues'     => 'Queues',
        'regionId'   => 'RegionId',
        'startRange' => 'StartRange',
        'types'      => 'Types',
        'users'      => 'Users',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appIds) {
            $res['AppIds'] = $this->appIds;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->endRange) {
            $res['EndRange'] = null !== $this->endRange ? $this->endRange->toMap() : null;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->queues) {
            $res['Queues'] = $this->queues;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->startRange) {
            $res['StartRange'] = null !== $this->startRange ? $this->startRange->toMap() : null;
        }
        if (null !== $this->types) {
            $res['Types'] = $this->types;
        }
        if (null !== $this->users) {
            $res['Users'] = $this->users;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDoctorJobsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppIds'])) {
            if (!empty($map['AppIds'])) {
                $model->appIds = $map['AppIds'];
            }
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['EndRange'])) {
            $model->endRange = endRange::fromMap($map['EndRange']);
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['Queues'])) {
            if (!empty($map['Queues'])) {
                $model->queues = $map['Queues'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StartRange'])) {
            $model->startRange = startRange::fromMap($map['StartRange']);
        }
        if (isset($map['Types'])) {
            if (!empty($map['Types'])) {
                $model->types = $map['Types'];
            }
        }
        if (isset($map['Users'])) {
            if (!empty($map['Users'])) {
                $model->users = $map['Users'];
            }
        }

        return $model;
    }
}
