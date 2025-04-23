<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models;

use AlibabaCloud\Dara\Model;

class ListTracesDatasShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $endUserId;

    /**
     * @var string
     */
    public $filtersShrink;

    /**
     * @var bool
     */
    public $hasEvents;

    /**
     * @var bool
     */
    public $hasStatusMessage;

    /**
     * @var string
     */
    public $llmAppName;

    /**
     * @var string
     */
    public $maxTime;

    /**
     * @var string
     */
    public $minTime;

    /**
     * @var bool
     */
    public $opentelemetryCompatible;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $ownerSubId;

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
    public $sortBy;

    /**
     * @var string
     */
    public $sortOrder;

    /**
     * @var string
     */
    public $spanIdsShrink;

    /**
     * @var string
     */
    public $traceIdsShrink;

    /**
     * @var string
     */
    public $traceReduceMethod;
    protected $_name = [
        'endUserId' => 'EndUserId',
        'filtersShrink' => 'Filters',
        'hasEvents' => 'HasEvents',
        'hasStatusMessage' => 'HasStatusMessage',
        'llmAppName' => 'LlmAppName',
        'maxTime' => 'MaxTime',
        'minTime' => 'MinTime',
        'opentelemetryCompatible' => 'OpentelemetryCompatible',
        'ownerId' => 'OwnerId',
        'ownerSubId' => 'OwnerSubId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'sortBy' => 'SortBy',
        'sortOrder' => 'SortOrder',
        'spanIdsShrink' => 'SpanIds',
        'traceIdsShrink' => 'TraceIds',
        'traceReduceMethod' => 'TraceReduceMethod',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }

        if (null !== $this->filtersShrink) {
            $res['Filters'] = $this->filtersShrink;
        }

        if (null !== $this->hasEvents) {
            $res['HasEvents'] = $this->hasEvents;
        }

        if (null !== $this->hasStatusMessage) {
            $res['HasStatusMessage'] = $this->hasStatusMessage;
        }

        if (null !== $this->llmAppName) {
            $res['LlmAppName'] = $this->llmAppName;
        }

        if (null !== $this->maxTime) {
            $res['MaxTime'] = $this->maxTime;
        }

        if (null !== $this->minTime) {
            $res['MinTime'] = $this->minTime;
        }

        if (null !== $this->opentelemetryCompatible) {
            $res['OpentelemetryCompatible'] = $this->opentelemetryCompatible;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->ownerSubId) {
            $res['OwnerSubId'] = $this->ownerSubId;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }

        if (null !== $this->sortOrder) {
            $res['SortOrder'] = $this->sortOrder;
        }

        if (null !== $this->spanIdsShrink) {
            $res['SpanIds'] = $this->spanIdsShrink;
        }

        if (null !== $this->traceIdsShrink) {
            $res['TraceIds'] = $this->traceIdsShrink;
        }

        if (null !== $this->traceReduceMethod) {
            $res['TraceReduceMethod'] = $this->traceReduceMethod;
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
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }

        if (isset($map['Filters'])) {
            $model->filtersShrink = $map['Filters'];
        }

        if (isset($map['HasEvents'])) {
            $model->hasEvents = $map['HasEvents'];
        }

        if (isset($map['HasStatusMessage'])) {
            $model->hasStatusMessage = $map['HasStatusMessage'];
        }

        if (isset($map['LlmAppName'])) {
            $model->llmAppName = $map['LlmAppName'];
        }

        if (isset($map['MaxTime'])) {
            $model->maxTime = $map['MaxTime'];
        }

        if (isset($map['MinTime'])) {
            $model->minTime = $map['MinTime'];
        }

        if (isset($map['OpentelemetryCompatible'])) {
            $model->opentelemetryCompatible = $map['OpentelemetryCompatible'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['OwnerSubId'])) {
            $model->ownerSubId = $map['OwnerSubId'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }

        if (isset($map['SortOrder'])) {
            $model->sortOrder = $map['SortOrder'];
        }

        if (isset($map['SpanIds'])) {
            $model->spanIdsShrink = $map['SpanIds'];
        }

        if (isset($map['TraceIds'])) {
            $model->traceIdsShrink = $map['TraceIds'];
        }

        if (isset($map['TraceReduceMethod'])) {
            $model->traceReduceMethod = $map['TraceReduceMethod'];
        }

        return $model;
    }
}
