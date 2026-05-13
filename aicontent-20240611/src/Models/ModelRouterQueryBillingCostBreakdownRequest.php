<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class ModelRouterQueryBillingCostBreakdownRequest extends Model
{
    /**
     * @var int
     */
    public $clientId;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $granularity;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var int
     */
    public $modelId;

    /**
     * @var string
     */
    public $modelTypes;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'clientId' => 'clientId',
        'endTime' => 'endTime',
        'granularity' => 'granularity',
        'maxResults' => 'maxResults',
        'modelId' => 'modelId',
        'modelTypes' => 'modelTypes',
        'nextToken' => 'nextToken',
        'page' => 'page',
        'pageSize' => 'pageSize',
        'startTime' => 'startTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientId) {
            $res['clientId'] = $this->clientId;
        }

        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->granularity) {
            $res['granularity'] = $this->granularity;
        }

        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->modelId) {
            $res['modelId'] = $this->modelId;
        }

        if (null !== $this->modelTypes) {
            $res['modelTypes'] = $this->modelTypes;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->page) {
            $res['page'] = $this->page;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
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
        if (isset($map['clientId'])) {
            $model->clientId = $map['clientId'];
        }

        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['granularity'])) {
            $model->granularity = $map['granularity'];
        }

        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['modelId'])) {
            $model->modelId = $map['modelId'];
        }

        if (isset($map['modelTypes'])) {
            $model->modelTypes = $map['modelTypes'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['page'])) {
            $model->page = $map['page'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        return $model;
    }
}
