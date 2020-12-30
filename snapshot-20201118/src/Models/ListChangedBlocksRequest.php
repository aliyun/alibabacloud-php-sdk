<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Snapshot\V20201118\Models;

use AlibabaCloud\Tea\Model;

class ListChangedBlocksRequest extends Model
{
    /**
     * @description 标记当前开始读取的位置，置空表示从头开始
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description 本次读取的最大数据记录数量
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description 幂等参数
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description 待比较的第一个快照名称
     *
     * @var string
     */
    public $firstSnapshotId;

    /**
     * @description 待比较的第二个快照名称
     *
     * @var string
     */
    public $secondSnapshotId;

    /**
     * @description 两个快照比较的起始数据块 index，从零开始
     *
     * @var int
     */
    public $startingBlockIndex;
    protected $_name = [
        'nextToken'          => 'NextToken',
        'maxResults'         => 'MaxResults',
        'clientToken'        => 'ClientToken',
        'firstSnapshotId'    => 'FirstSnapshotId',
        'secondSnapshotId'   => 'SecondSnapshotId',
        'startingBlockIndex' => 'StartingBlockIndex',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->firstSnapshotId) {
            $res['FirstSnapshotId'] = $this->firstSnapshotId;
        }
        if (null !== $this->secondSnapshotId) {
            $res['SecondSnapshotId'] = $this->secondSnapshotId;
        }
        if (null !== $this->startingBlockIndex) {
            $res['StartingBlockIndex'] = $this->startingBlockIndex;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListChangedBlocksRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['FirstSnapshotId'])) {
            $model->firstSnapshotId = $map['FirstSnapshotId'];
        }
        if (isset($map['SecondSnapshotId'])) {
            $model->secondSnapshotId = $map['SecondSnapshotId'];
        }
        if (isset($map['StartingBlockIndex'])) {
            $model->startingBlockIndex = $map['StartingBlockIndex'];
        }

        return $model;
    }
}
