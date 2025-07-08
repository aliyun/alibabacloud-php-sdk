<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models\ListTracesDatasRequest\filters;

class ListTracesDatasRequest extends Model
{
    /**
     * @var string
     */
    public $endUserId;

    /**
     * @var filters[]
     */
    public $filters;

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
     * @var float
     */
    public $maxDuration;

    /**
     * @var string
     */
    public $maxTime;

    /**
     * @var float
     */
    public $minDuration;

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
     * @var string[]
     */
    public $spanIds;

    /**
     * @var string
     */
    public $spanName;

    /**
     * @var string[]
     */
    public $traceIds;

    /**
     * @var string
     */
    public $traceReduceMethod;
    protected $_name = [
        'endUserId' => 'EndUserId',
        'filters' => 'Filters',
        'hasEvents' => 'HasEvents',
        'hasStatusMessage' => 'HasStatusMessage',
        'llmAppName' => 'LlmAppName',
        'maxDuration' => 'MaxDuration',
        'maxTime' => 'MaxTime',
        'minDuration' => 'MinDuration',
        'minTime' => 'MinTime',
        'opentelemetryCompatible' => 'OpentelemetryCompatible',
        'ownerId' => 'OwnerId',
        'ownerSubId' => 'OwnerSubId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'sortBy' => 'SortBy',
        'sortOrder' => 'SortOrder',
        'spanIds' => 'SpanIds',
        'spanName' => 'SpanName',
        'traceIds' => 'TraceIds',
        'traceReduceMethod' => 'TraceReduceMethod',
    ];

    public function validate()
    {
        if (\is_array($this->filters)) {
            Model::validateArray($this->filters);
        }
        if (\is_array($this->spanIds)) {
            Model::validateArray($this->spanIds);
        }
        if (\is_array($this->traceIds)) {
            Model::validateArray($this->traceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }

        if (null !== $this->filters) {
            if (\is_array($this->filters)) {
                $res['Filters'] = [];
                $n1 = 0;
                foreach ($this->filters as $item1) {
                    $res['Filters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->maxDuration) {
            $res['MaxDuration'] = $this->maxDuration;
        }

        if (null !== $this->maxTime) {
            $res['MaxTime'] = $this->maxTime;
        }

        if (null !== $this->minDuration) {
            $res['MinDuration'] = $this->minDuration;
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

        if (null !== $this->spanIds) {
            if (\is_array($this->spanIds)) {
                $res['SpanIds'] = [];
                $n1 = 0;
                foreach ($this->spanIds as $item1) {
                    $res['SpanIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->spanName) {
            $res['SpanName'] = $this->spanName;
        }

        if (null !== $this->traceIds) {
            if (\is_array($this->traceIds)) {
                $res['TraceIds'] = [];
                $n1 = 0;
                foreach ($this->traceIds as $item1) {
                    $res['TraceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['Filters'])) {
                $model->filters = [];
                $n1 = 0;
                foreach ($map['Filters'] as $item1) {
                    $model->filters[$n1] = filters::fromMap($item1);
                    ++$n1;
                }
            }
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

        if (isset($map['MaxDuration'])) {
            $model->maxDuration = $map['MaxDuration'];
        }

        if (isset($map['MaxTime'])) {
            $model->maxTime = $map['MaxTime'];
        }

        if (isset($map['MinDuration'])) {
            $model->minDuration = $map['MinDuration'];
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
            if (!empty($map['SpanIds'])) {
                $model->spanIds = [];
                $n1 = 0;
                foreach ($map['SpanIds'] as $item1) {
                    $model->spanIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SpanName'])) {
            $model->spanName = $map['SpanName'];
        }

        if (isset($map['TraceIds'])) {
            if (!empty($map['TraceIds'])) {
                $model->traceIds = [];
                $n1 = 0;
                foreach ($map['TraceIds'] as $item1) {
                    $model->traceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TraceReduceMethod'])) {
            $model->traceReduceMethod = $map['TraceReduceMethod'];
        }

        return $model;
    }
}
