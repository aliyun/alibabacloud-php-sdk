<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ListOfficeSiteOverviewRequest extends Model
{
    /**
     * @description Specifies whether to refresh the cache.
     *
     * @example false
     *
     * @var bool
     */
    public $forceRefresh;

    /**
     * @description The number of entries to return on each page.
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
     * @description The token that determines the start point of the next query. If this is your first query or no next query is to be sent, skip this parameter. If a next query is to be sent, set the parameter to the value of NextToken that is returned from the last call.
     *
     * @example caeba0bbb2be03f84eb48b699f0a4883
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The office network IDs. You can specify IDs of 1 to 100 office networks.
     *
     * @example cn-hangzhou+dir-363353****
     *
     * @var string[]
     */
    public $officeSiteId;

    /**
     * @description The query scope. Cloud computers in a cloud computer pool are pooled cloud computers.
     *
     * Default values:
     *
     *   1 (default): queries non-pooled cloud computers in the office network.
     *   2: queries pooled cloud computers in the office network.
     *   3: queries all cloud computers in the office network.
     *
     * @example 1
     *
     * @var int
     */
    public $queryRange;

    /**
     * @description The region ID. You can call the [DescribeRegions](~~196646~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'forceRefresh' => 'ForceRefresh',
        'maxResults'   => 'MaxResults',
        'nextToken'    => 'NextToken',
        'officeSiteId' => 'OfficeSiteId',
        'queryRange'   => 'QueryRange',
        'regionId'     => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->forceRefresh) {
            $res['ForceRefresh'] = $this->forceRefresh;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }
        if (null !== $this->queryRange) {
            $res['QueryRange'] = $this->queryRange;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListOfficeSiteOverviewRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ForceRefresh'])) {
            $model->forceRefresh = $map['ForceRefresh'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['OfficeSiteId'])) {
            if (!empty($map['OfficeSiteId'])) {
                $model->officeSiteId = $map['OfficeSiteId'];
            }
        }
        if (isset($map['QueryRange'])) {
            $model->queryRange = $map['QueryRange'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
