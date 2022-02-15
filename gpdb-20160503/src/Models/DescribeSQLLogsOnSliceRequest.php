<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class DescribeSQLLogsOnSliceRequest extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $executeState;

    /**
     * @var string
     */
    public $maxExecuteCost;

    /**
     * @var string
     */
    public $minExecuteCost;

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
    public $queryId;

    /**
     * @var string
     */
    public $sliceId;
    protected $_name = [
        'DBInstanceId'   => 'DBInstanceId',
        'executeState'   => 'ExecuteState',
        'maxExecuteCost' => 'MaxExecuteCost',
        'minExecuteCost' => 'MinExecuteCost',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'queryId'        => 'QueryId',
        'sliceId'        => 'SliceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->executeState) {
            $res['ExecuteState'] = $this->executeState;
        }
        if (null !== $this->maxExecuteCost) {
            $res['MaxExecuteCost'] = $this->maxExecuteCost;
        }
        if (null !== $this->minExecuteCost) {
            $res['MinExecuteCost'] = $this->minExecuteCost;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->queryId) {
            $res['QueryId'] = $this->queryId;
        }
        if (null !== $this->sliceId) {
            $res['SliceId'] = $this->sliceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSQLLogsOnSliceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['ExecuteState'])) {
            $model->executeState = $map['ExecuteState'];
        }
        if (isset($map['MaxExecuteCost'])) {
            $model->maxExecuteCost = $map['MaxExecuteCost'];
        }
        if (isset($map['MinExecuteCost'])) {
            $model->minExecuteCost = $map['MinExecuteCost'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['QueryId'])) {
            $model->queryId = $map['QueryId'];
        }
        if (isset($map['SliceId'])) {
            $model->sliceId = $map['SliceId'];
        }

        return $model;
    }
}
