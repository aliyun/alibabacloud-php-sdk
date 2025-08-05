<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Tea\Model;

class QueryTunnelMetricDetailRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $ascOrder;

    /**
     * @var string[]
     */
    public $groupList;

    /**
     * @example 10
     *
     * @var int
     */
    public $limit;

    /**
     * @var string[]
     */
    public $operationList;

    /**
     * @example maxValue
     *
     * @var string
     */
    public $orderColumn;

    /**
     * @example project_a
     *
     * @var string
     */
    public $project;

    /**
     * @example quota_A
     *
     * @var string
     */
    public $quotaNickname;

    /**
     * @var string[]
     */
    public $tableList;

    /**
     * @description This parameter is required.
     *
     * @example 1735536322
     *
     * @var int
     */
    public $endTime;

    /**
     * @description This parameter is required.
     *
     * @example 1735534322
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'ascOrder' => 'ascOrder',
        'groupList' => 'groupList',
        'limit' => 'limit',
        'operationList' => 'operationList',
        'orderColumn' => 'orderColumn',
        'project' => 'project',
        'quotaNickname' => 'quotaNickname',
        'tableList' => 'tableList',
        'endTime' => 'endTime',
        'startTime' => 'startTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ascOrder) {
            $res['ascOrder'] = $this->ascOrder;
        }
        if (null !== $this->groupList) {
            $res['groupList'] = $this->groupList;
        }
        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }
        if (null !== $this->operationList) {
            $res['operationList'] = $this->operationList;
        }
        if (null !== $this->orderColumn) {
            $res['orderColumn'] = $this->orderColumn;
        }
        if (null !== $this->project) {
            $res['project'] = $this->project;
        }
        if (null !== $this->quotaNickname) {
            $res['quotaNickname'] = $this->quotaNickname;
        }
        if (null !== $this->tableList) {
            $res['tableList'] = $this->tableList;
        }
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryTunnelMetricDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ascOrder'])) {
            $model->ascOrder = $map['ascOrder'];
        }
        if (isset($map['groupList'])) {
            if (!empty($map['groupList'])) {
                $model->groupList = $map['groupList'];
            }
        }
        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }
        if (isset($map['operationList'])) {
            if (!empty($map['operationList'])) {
                $model->operationList = $map['operationList'];
            }
        }
        if (isset($map['orderColumn'])) {
            $model->orderColumn = $map['orderColumn'];
        }
        if (isset($map['project'])) {
            $model->project = $map['project'];
        }
        if (isset($map['quotaNickname'])) {
            $model->quotaNickname = $map['quotaNickname'];
        }
        if (isset($map['tableList'])) {
            if (!empty($map['tableList'])) {
                $model->tableList = $map['tableList'];
            }
        }
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        return $model;
    }
}
