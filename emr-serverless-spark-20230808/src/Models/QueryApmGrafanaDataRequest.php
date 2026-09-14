<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\QueryApmGrafanaDataRequest\queryParams;

class QueryApmGrafanaDataRequest extends Model
{
    /**
     * @var string
     */
    public $componentName;

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
     * @var string
     */
    public $regionId;

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
    public $variables;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'componentName' => 'componentName',
        'dashboardId' => 'dashboardId',
        'end' => 'end',
        'provider' => 'provider',
        'query' => 'query',
        'queryParams' => 'queryParams',
        'queryUrl' => 'queryUrl',
        'regionId' => 'regionId',
        'start' => 'start',
        'step' => 'step',
        'time' => 'time',
        'variables' => 'variables',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        if (null !== $this->queryParams) {
            $this->queryParams->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->componentName) {
            $res['componentName'] = $this->componentName;
        }

        if (null !== $this->dashboardId) {
            $res['dashboardId'] = $this->dashboardId;
        }

        if (null !== $this->end) {
            $res['end'] = $this->end;
        }

        if (null !== $this->provider) {
            $res['provider'] = $this->provider;
        }

        if (null !== $this->query) {
            $res['query'] = $this->query;
        }

        if (null !== $this->queryParams) {
            $res['queryParams'] = null !== $this->queryParams ? $this->queryParams->toArray($noStream) : $this->queryParams;
        }

        if (null !== $this->queryUrl) {
            $res['queryUrl'] = $this->queryUrl;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->start) {
            $res['start'] = $this->start;
        }

        if (null !== $this->step) {
            $res['step'] = $this->step;
        }

        if (null !== $this->time) {
            $res['time'] = $this->time;
        }

        if (null !== $this->variables) {
            $res['variables'] = $this->variables;
        }

        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
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
        if (isset($map['componentName'])) {
            $model->componentName = $map['componentName'];
        }

        if (isset($map['dashboardId'])) {
            $model->dashboardId = $map['dashboardId'];
        }

        if (isset($map['end'])) {
            $model->end = $map['end'];
        }

        if (isset($map['provider'])) {
            $model->provider = $map['provider'];
        }

        if (isset($map['query'])) {
            $model->query = $map['query'];
        }

        if (isset($map['queryParams'])) {
            $model->queryParams = queryParams::fromMap($map['queryParams']);
        }

        if (isset($map['queryUrl'])) {
            $model->queryUrl = $map['queryUrl'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['start'])) {
            $model->start = $map['start'];
        }

        if (isset($map['step'])) {
            $model->step = $map['step'];
        }

        if (isset($map['time'])) {
            $model->time = $map['time'];
        }

        if (isset($map['variables'])) {
            $model->variables = $map['variables'];
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
