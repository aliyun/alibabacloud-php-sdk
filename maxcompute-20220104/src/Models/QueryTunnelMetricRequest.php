<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Tea\Model;

class QueryTunnelMetricRequest extends Model
{
    /**
     * @var int[]
     */
    public $codeList;

    /**
     * @var string[]
     */
    public $groupList;

    /**
     * @var string[]
     */
    public $operationList;

    /**
     * @example project_a
     *
     * @var string
     */
    public $project;

    /**
     * @example default
     *
     * @var string
     */
    public $quotaNickname;

    /**
     * @var string[]
     */
    public $tableList;

    /**
     * @example 10
     *
     * @var int
     */
    public $topN;

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

    /**
     * @example max
     *
     * @var string
     */
    public $strategy;
    protected $_name = [
        'codeList' => 'codeList',
        'groupList' => 'groupList',
        'operationList' => 'operationList',
        'project' => 'project',
        'quotaNickname' => 'quotaNickname',
        'tableList' => 'tableList',
        'topN' => 'topN',
        'endTime' => 'endTime',
        'startTime' => 'startTime',
        'strategy' => 'strategy',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->codeList) {
            $res['codeList'] = $this->codeList;
        }
        if (null !== $this->groupList) {
            $res['groupList'] = $this->groupList;
        }
        if (null !== $this->operationList) {
            $res['operationList'] = $this->operationList;
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
        if (null !== $this->topN) {
            $res['topN'] = $this->topN;
        }
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }
        if (null !== $this->strategy) {
            $res['strategy'] = $this->strategy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryTunnelMetricRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['codeList'])) {
            if (!empty($map['codeList'])) {
                $model->codeList = $map['codeList'];
            }
        }
        if (isset($map['groupList'])) {
            if (!empty($map['groupList'])) {
                $model->groupList = $map['groupList'];
            }
        }
        if (isset($map['operationList'])) {
            if (!empty($map['operationList'])) {
                $model->operationList = $map['operationList'];
            }
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
        if (isset($map['topN'])) {
            $model->topN = $map['topN'];
        }
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }
        if (isset($map['strategy'])) {
            $model->strategy = $map['strategy'];
        }

        return $model;
    }
}
