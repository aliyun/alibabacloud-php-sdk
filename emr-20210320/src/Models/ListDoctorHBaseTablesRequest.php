<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class ListDoctorHBaseTablesRequest extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * This parameter is required.
     * @example c-b933c5aac8fe****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The query date.
     *
     * This parameter is required.
     * @example 2023-01-01
     *
     * @var string
     */
    public $dateTime;

    /**
     * @description The maximum number of entries that are returned.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description Marks the current position to start reading. If this field is empty, the data is read from the beginning.
     *
     * @example DD6B1B2A-5837-5237-ABE4-FF0C89568980
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The field that you use to sort the query results.
     *
     * Valid values:
     *
     *   tableSize
     *
     * @example tableSize
     *
     * @var string
     */
    public $orderBy;

    /**
     * @description The order in which you want to sort the query results. Valid value:
     *
     *   ASC: in ascending order
     *   DESC: in descending order
     *
     * @example ASC
     *
     * @var string
     */
    public $orderType;

    /**
     * @description The ID of the region.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The table names, which are used to filter the query results.
     *
     * @example null
     *
     * @var string[]
     */
    public $tableNames;
    protected $_name = [
        'clusterId'  => 'ClusterId',
        'dateTime'   => 'DateTime',
        'maxResults' => 'MaxResults',
        'nextToken'  => 'NextToken',
        'orderBy'    => 'OrderBy',
        'orderType'  => 'OrderType',
        'regionId'   => 'RegionId',
        'tableNames' => 'TableNames',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->dateTime) {
            $res['DateTime'] = $this->dateTime;
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->tableNames) {
            $res['TableNames'] = $this->tableNames;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDoctorHBaseTablesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DateTime'])) {
            $model->dateTime = $map['DateTime'];
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TableNames'])) {
            if (!empty($map['TableNames'])) {
                $model->tableNames = $map['TableNames'];
            }
        }

        return $model;
    }
}
