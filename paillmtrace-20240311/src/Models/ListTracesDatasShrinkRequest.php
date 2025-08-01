<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models;

use AlibabaCloud\Tea\Model;

class ListTracesDatasShrinkRequest extends Model
{
    /**
     * @description The value of the attributes.service.app.user_id field in the trace record. It can contain upper and lower case letters, digits, dot (.), hyphen (-), and underscore (_). It is empty by default.
     *
     * @example end-user.12345
     *
     * @var string
     */
    public $endUserId;

    /**
     * @description Other filter parameters
     *
     * @var string
     */
    public $filtersShrink;

    /**
     * @description Whether to return only trace records containing spans with a non-empty events. Example: Suppose a trace has 3 spans. If this parameter is True, this trace meets the condition when any one of the 3 spans has a non-empty events. The default value is False. The events is not used for filtering.
     *
     * @example False
     *
     * @var bool
     */
    public $hasEvents;

    /**
     * @description Whether to return only trace records containing spans with a non-empty statusMessage. Example: Suppose a trace has 3 spans. If this parameter is True, this trace meets the condition when any one of the 3 spans has a non-empty statusMessage. The default value is False. The statusMessage is not used for filtering.
     *
     * @example False
     *
     * @var bool
     */
    public $hasStatusMessage;

    /**
     * @description The value of the resources.service.app.name field in the trace record. It can contain upper and lower case letters, digits, dot (.), hyphen (-), and underscore (_). Must be an exact match. It is empty by default.
     *
     * @example My.super_LLM-app2
     *
     * @var string
     */
    public $llmAppName;

    /**
     * @var float
     */
    public $maxDuration;

    /**
     * @description The upper limit of the search time range, in UTC format (YYYY-mm-dd or YYYY-MM-DD HH:mm:ss). By default, the value is (current time +10 minutes)
     *
     * @example 2024-01-31
     * 2024-12-31 23:59:59
     *
     * @var string
     */
    public $maxTime;

    /**
     * @var float
     */
    public $minDuration;

    /**
     * @description The lower limit of the search time range, in UTC format (YYYY-mm-dd or YYYY-MM-DD HH:mm:ss). By default, the value is (current time - 2 days).
     *
     * This parameter is required.
     *
     * @example 2024-01-31
     * 2024-12-31 23:59:59
     *
     * @var string
     */
    public $minTime;

    /**
     * @description Whether the returned JSON data can be directly converted to OpenTelemetry TracesData protobuf object. Default value: False. JSON data that is compatible with OpenTelemetry is more complex. Such data is generally not required unless you want to generate a protobuf object of OpenTelemetry.
     *
     * @example False
     *
     * @var bool
     */
    public $opentelemetryCompatible;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @description The value of the resources.service.owner.sub_id field in the trace record. It can contain upper and lower case letters, digits, dot (.), hyphen (-), and underscore (_). It is empty by default.
     *
     * @example 123456789
     *
     * @var string
     */
    public $ownerSubId;

    /**
     * @description The page number. Page starts from page 1. Default value: 1
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Default value: 20. Maximum value: 100.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The field used to sort the returned results. Valid values: StartTime and Duration.
     *
     * @example StartTime
     * Duration
     *
     * @var string
     */
    public $sortBy;

    /**
     * @description The sorting order. Valid values:
     *
     *   **ASC**
     *   **DESC** (default)
     *
     * @example DESC
     * ASC
     *
     * @var string
     */
    public $sortOrder;

    /**
     * @description The list of span IDs. Each trace record contains one or more spans.
     *
     * @var string
     */
    public $spanIdsShrink;

    /**
     * @var string
     */
    public $spanName;

    /**
     * @description The list of trace IDs.
     *
     * @var string
     */
    public $traceIdsShrink;

    /**
     * @description The content simplification method for returned trace data to reduce the data volume.
     *
     * REMOVE_EMBEDDING: Removes all embedding array contents.
     *
     * ROOT_ONLY: Returns only the root span for each trace, with the root span content also having the REMOVE_EMBEDDING applied.
     *
     * Blank: Maintains the original data without simplification.
     *
     * @example REMOVE_EMBEDDING
     * ROOT_ONLY
     *
     * @var string
     */
    public $traceReduceMethod;
    protected $_name = [
        'endUserId' => 'EndUserId',
        'filtersShrink' => 'Filters',
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
        'spanIdsShrink' => 'SpanIds',
        'spanName' => 'SpanName',
        'traceIdsShrink' => 'TraceIds',
        'traceReduceMethod' => 'TraceReduceMethod',
    ];

    public function validate() {}

    public function toMap()
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
        if (null !== $this->spanIdsShrink) {
            $res['SpanIds'] = $this->spanIdsShrink;
        }
        if (null !== $this->spanName) {
            $res['SpanName'] = $this->spanName;
        }
        if (null !== $this->traceIdsShrink) {
            $res['TraceIds'] = $this->traceIdsShrink;
        }
        if (null !== $this->traceReduceMethod) {
            $res['TraceReduceMethod'] = $this->traceReduceMethod;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTracesDatasShrinkRequest
     */
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
            $model->spanIdsShrink = $map['SpanIds'];
        }
        if (isset($map['SpanName'])) {
            $model->spanName = $map['SpanName'];
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
