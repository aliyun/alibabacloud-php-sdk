<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Dara\Model;

class QueryCubePerformanceRequest extends Model
{
    /**
     * @var int
     */
    public $costTimeAvgMin;

    /**
     * @var string
     */
    public $cubeId;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $queryType;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'costTimeAvgMin' => 'CostTimeAvgMin',
        'cubeId' => 'CubeId',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'queryType' => 'QueryType',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->costTimeAvgMin) {
            $res['CostTimeAvgMin'] = $this->costTimeAvgMin;
        }

        if (null !== $this->cubeId) {
            $res['CubeId'] = $this->cubeId;
        }

        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->queryType) {
            $res['QueryType'] = $this->queryType;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CostTimeAvgMin'])) {
            $model->costTimeAvgMin = $map['CostTimeAvgMin'];
        }

        if (isset($map['CubeId'])) {
            $model->cubeId = $map['CubeId'];
        }

        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['QueryType'])) {
            $model->queryType = $map['QueryType'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
