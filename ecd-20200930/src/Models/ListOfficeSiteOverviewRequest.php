<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ListOfficeSiteOverviewRequest extends Model
{
    /**
     * @var bool
     */
    public $forceRefresh;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string[]
     */
    public $officeSiteId;

    /**
     * @var int
     */
    public $queryRange;

    /**
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
