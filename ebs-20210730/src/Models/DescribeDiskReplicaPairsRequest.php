<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\Tea\Model;

class DescribeDiskReplicaPairsRequest extends Model
{
    /**
     * @var int
     */
    public $maxResults;

    /**
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
     * @var string
     */
    public $pairIds;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $replicaGroupId;

    /**
     * @var string
     */
    public $site;
    protected $_name = [
        'maxResults'     => 'MaxResults',
        'nextToken'      => 'NextToken',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'pairIds'        => 'PairIds',
        'regionId'       => 'RegionId',
        'replicaGroupId' => 'ReplicaGroupId',
        'site'           => 'Site',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->pairIds) {
            $res['PairIds'] = $this->pairIds;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->replicaGroupId) {
            $res['ReplicaGroupId'] = $this->replicaGroupId;
        }
        if (null !== $this->site) {
            $res['Site'] = $this->site;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDiskReplicaPairsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['PairIds'])) {
            $model->pairIds = $map['PairIds'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ReplicaGroupId'])) {
            $model->replicaGroupId = $map['ReplicaGroupId'];
        }
        if (isset($map['Site'])) {
            $model->site = $map['Site'];
        }

        return $model;
    }
}
