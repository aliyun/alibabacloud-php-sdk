<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\SDK\Emr\V20210320\Models\QueryApmGrafanaDataShrinkRequest\queryParams;
use AlibabaCloud\Tea\Model;

class QueryApmGrafanaDataShrinkRequest extends Model
{
    /**
     * @description 集群ID。
     *
     * @example c-b933c5aac8fe****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $dashboardId;

    /**
     * @var string
     */
    public $end;

    /**
     * @var string
     */
    public $provider;

    /**
     * @var string
     */
    public $query;

    /**
     * @var queryParams
     */
    public $queryParams;

    /**
     * @var string
     */
    public $queryUrl;

    /**
     * @description 地域ID。
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description 如果存在clusterId，从Cluster中获取该值，如果clusterId为空，用户显式指定
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $start;

    /**
     * @var string
     */
    public $step;

    /**
     * @var string
     */
    public $time;

    /**
     * @var string
     */
    public $variablesShrink;
    protected $_name = [
        'clusterId'       => 'ClusterId',
        'dashboardId'     => 'DashboardId',
        'end'             => 'End',
        'provider'        => 'Provider',
        'query'           => 'Query',
        'queryParams'     => 'QueryParams',
        'queryUrl'        => 'QueryUrl',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'start'           => 'Start',
        'step'            => 'Step',
        'time'            => 'Time',
        'variablesShrink' => 'Variables',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->dashboardId) {
            $res['DashboardId'] = $this->dashboardId;
        }
        if (null !== $this->end) {
            $res['End'] = $this->end;
        }
        if (null !== $this->provider) {
            $res['Provider'] = $this->provider;
        }
        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }
        if (null !== $this->queryParams) {
            $res['QueryParams'] = null !== $this->queryParams ? $this->queryParams->toMap() : null;
        }
        if (null !== $this->queryUrl) {
            $res['QueryUrl'] = $this->queryUrl;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }
        if (null !== $this->step) {
            $res['Step'] = $this->step;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->variablesShrink) {
            $res['Variables'] = $this->variablesShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryApmGrafanaDataShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DashboardId'])) {
            $model->dashboardId = $map['DashboardId'];
        }
        if (isset($map['End'])) {
            $model->end = $map['End'];
        }
        if (isset($map['Provider'])) {
            $model->provider = $map['Provider'];
        }
        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }
        if (isset($map['QueryParams'])) {
            $model->queryParams = queryParams::fromMap($map['QueryParams']);
        }
        if (isset($map['QueryUrl'])) {
            $model->queryUrl = $map['QueryUrl'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }
        if (isset($map['Step'])) {
            $model->step = $map['Step'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['Variables'])) {
            $model->variablesShrink = $map['Variables'];
        }

        return $model;
    }
}
