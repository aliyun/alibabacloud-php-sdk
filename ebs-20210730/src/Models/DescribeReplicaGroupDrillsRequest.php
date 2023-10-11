<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\Tea\Model;

class DescribeReplicaGroupDrillsRequest extends Model
{
    /**
     * @example pg-drill-xxxx
     *
     * @var string
     */
    public $drillId;

    /**
     * @example pg-xxxx
     *
     * @var string
     */
    public $groupId;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example AAAAAdDWBF2****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 5
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'drillId'    => 'DrillId',
        'groupId'    => 'GroupId',
        'maxResults' => 'MaxResults',
        'nextToken'  => 'NextToken',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'regionId'   => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->drillId) {
            $res['DrillId'] = $this->drillId;
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
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeReplicaGroupDrillsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DrillId'])) {
            $model->drillId = $map['DrillId'];
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
