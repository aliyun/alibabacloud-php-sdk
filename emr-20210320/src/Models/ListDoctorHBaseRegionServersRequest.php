<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class ListDoctorHBaseRegionServersRequest extends Model
{
    /**
     * @description The cluster ID.
     *
     * @example c-b933c5aac8fe****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The query date.
     *
     * @example 2023-01-01
     *
     * @var string
     */
    public $dateTime;

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
     * @description The field that you use to sort the query results. Valid value:
     *
     *   regionCount: the number of regions.
     *
     * @example regionCount
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
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The RegionServer hosts.
     *
     * @example null
     *
     * @var string[]
     */
    public $regionServerHosts;
    protected $_name = [
        'clusterId'         => 'ClusterId',
        'dateTime'          => 'DateTime',
        'maxResults'        => 'MaxResults',
        'nextToken'         => 'NextToken',
        'orderBy'           => 'OrderBy',
        'orderType'         => 'OrderType',
        'regionId'          => 'RegionId',
        'regionServerHosts' => 'RegionServerHosts',
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
        if (null !== $this->regionServerHosts) {
            $res['RegionServerHosts'] = $this->regionServerHosts;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDoctorHBaseRegionServersRequest
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
        if (isset($map['RegionServerHosts'])) {
            if (!empty($map['RegionServerHosts'])) {
                $model->regionServerHosts = $map['RegionServerHosts'];
            }
        }

        return $model;
    }
}
