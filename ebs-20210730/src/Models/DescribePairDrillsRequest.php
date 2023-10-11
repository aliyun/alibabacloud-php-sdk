<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\Tea\Model;

class DescribePairDrillsRequest extends Model
{
    /**
     * @example drill-xxxx
     *
     * @var string
     */
    public $drillId;

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
     * @example 1
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
     * @example pair-xxxx
     *
     * @var string
     */
    public $pairId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'drillId'    => 'DrillId',
        'maxResults' => 'MaxResults',
        'nextToken'  => 'NextToken',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'pairId'     => 'PairId',
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
        if (null !== $this->pairId) {
            $res['PairId'] = $this->pairId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePairDrillsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DrillId'])) {
            $model->drillId = $map['DrillId'];
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
        if (isset($map['PairId'])) {
            $model->pairId = $map['PairId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
