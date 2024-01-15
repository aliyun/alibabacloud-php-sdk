<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class AlertQuery extends Model
{
    /**
     * @example chartExmaple
     *
     * @var string
     */
    public $chartTitle;

    /**
     * @example dashboardExample
     *
     * @var string
     */
    public $dashboardId;

    /**
     * @example now
     *
     * @var string
     */
    public $end;

    /**
     * @example auto
     *
     * @var string
     */
    public $powerSqlMode;

    /**
     * @example projectExample
     *
     * @var string
     */
    public $project;

    /**
     * @example * | select *
     *
     * @var string
     */
    public $query;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $roleArn;

    /**
     * @example -5m
     *
     * @var string
     */
    public $start;

    /**
     * @example store Example
     *
     * @var string
     */
    public $store;

    /**
     * @example log
     *
     * @var string
     */
    public $storeType;

    /**
     * @example Relative
     *
     * @var string
     */
    public $timeSpanType;

    /**
     * @var string
     */
    public $ui;
    protected $_name = [
        'chartTitle'   => 'chartTitle',
        'dashboardId'  => 'dashboardId',
        'end'          => 'end',
        'powerSqlMode' => 'powerSqlMode',
        'project'      => 'project',
        'query'        => 'query',
        'region'       => 'region',
        'roleArn'      => 'roleArn',
        'start'        => 'start',
        'store'        => 'store',
        'storeType'    => 'storeType',
        'timeSpanType' => 'timeSpanType',
        'ui'           => 'ui',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chartTitle) {
            $res['chartTitle'] = $this->chartTitle;
        }
        if (null !== $this->dashboardId) {
            $res['dashboardId'] = $this->dashboardId;
        }
        if (null !== $this->end) {
            $res['end'] = $this->end;
        }
        if (null !== $this->powerSqlMode) {
            $res['powerSqlMode'] = $this->powerSqlMode;
        }
        if (null !== $this->project) {
            $res['project'] = $this->project;
        }
        if (null !== $this->query) {
            $res['query'] = $this->query;
        }
        if (null !== $this->region) {
            $res['region'] = $this->region;
        }
        if (null !== $this->roleArn) {
            $res['roleArn'] = $this->roleArn;
        }
        if (null !== $this->start) {
            $res['start'] = $this->start;
        }
        if (null !== $this->store) {
            $res['store'] = $this->store;
        }
        if (null !== $this->storeType) {
            $res['storeType'] = $this->storeType;
        }
        if (null !== $this->timeSpanType) {
            $res['timeSpanType'] = $this->timeSpanType;
        }
        if (null !== $this->ui) {
            $res['ui'] = $this->ui;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AlertQuery
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['chartTitle'])) {
            $model->chartTitle = $map['chartTitle'];
        }
        if (isset($map['dashboardId'])) {
            $model->dashboardId = $map['dashboardId'];
        }
        if (isset($map['end'])) {
            $model->end = $map['end'];
        }
        if (isset($map['powerSqlMode'])) {
            $model->powerSqlMode = $map['powerSqlMode'];
        }
        if (isset($map['project'])) {
            $model->project = $map['project'];
        }
        if (isset($map['query'])) {
            $model->query = $map['query'];
        }
        if (isset($map['region'])) {
            $model->region = $map['region'];
        }
        if (isset($map['roleArn'])) {
            $model->roleArn = $map['roleArn'];
        }
        if (isset($map['start'])) {
            $model->start = $map['start'];
        }
        if (isset($map['store'])) {
            $model->store = $map['store'];
        }
        if (isset($map['storeType'])) {
            $model->storeType = $map['storeType'];
        }
        if (isset($map['timeSpanType'])) {
            $model->timeSpanType = $map['timeSpanType'];
        }
        if (isset($map['ui'])) {
            $model->ui = $map['ui'];
        }

        return $model;
    }
}
