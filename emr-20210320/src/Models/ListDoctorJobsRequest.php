<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorJobsRequest\endRange;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorJobsRequest\startRange;
use AlibabaCloud\Tea\Model;

class ListDoctorJobsRequest extends Model
{
    /**
     * @description app ID数组
     *
     * @example null
     *
     * @var string[]
     */
    public $appIds;

    /**
     * @description 集群ID。
     *
     * @example c-b933c5aac8fe****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description 结束range
     *
     * @var endRange
     */
    public $endRange;

    /**
     * @description 一次获取的最大记录数。取值范围：1~100。
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description 标记当前开始读取的位置，置空表示从头开始。
     *
     * @example DD6B1B2A-5837-5237-ABE4-FF0C89568980
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description 排序字段
     *
     * @example vcoreSeconds
     *
     * @var string
     */
    public $orderBy;

    /**
     * @description 排序类型
     *
     * @example ASC
     *
     * @var string
     */
    public $orderType;

    /**
     * @example null
     *
     * @var string[]
     */
    public $queues;

    /**
     * @description 区域ID。
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description 开始range
     *
     * @var startRange
     */
    public $startRange;

    /**
     * @example null
     *
     * @var string[]
     */
    public $types;

    /**
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
