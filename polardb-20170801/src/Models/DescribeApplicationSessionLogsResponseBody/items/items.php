<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeApplicationSessionLogsResponseBody\items;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $agent;

    /**
     * @var string
     */
    public $api;

    /**
     * @var string
     */
    public $content;

    /**
     * @var int
     */
    public $detailDurationMs;

    /**
     * @var bool
     */
    public $detailIsError;

    /**
     * @var string
     */
    public $detailStatus;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $parentId;

    /**
     * @var string
     */
    public $provider;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $stopReason;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $thinking;

    /**
     * @var string
     */
    public $thinkingSignature;

    /**
     * @var string
     */
    public $time;

    /**
     * @var string
     */
    public $timestamp;

    /**
     * @var string
     */
    public $toolName;

    /**
     * @var int
     */
    public $totalTokens;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $usageCacheRead;

    /**
     * @var int
     */
    public $usageCacheWrite;

    /**
     * @var int
     */
    public $usageCostCacheRead;

    /**
     * @var int
     */
    public $usageCostCacheWrite;

    /**
     * @var int
     */
    public $usageCostInput;

    /**
     * @var int
     */
    public $usageCostOutput;

    /**
     * @var int
     */
    public $usageCostTotal;

    /**
     * @var int
     */
    public $usageInput;

    /**
     * @var int
     */
    public $usageOutput;

    /**
     * @var int
     */
    public $usageTotalTokens;
    protected $_name = [
        'agent' => 'Agent',
        'api' => 'Api',
        'content' => 'Content',
        'detailDurationMs' => 'DetailDurationMs',
        'detailIsError' => 'DetailIsError',
        'detailStatus' => 'DetailStatus',
        'id' => 'Id',
        'model' => 'Model',
        'parentId' => 'ParentId',
        'provider' => 'Provider',
        'role' => 'Role',
        'sessionId' => 'SessionId',
        'status' => 'Status',
        'stopReason' => 'StopReason',
        'text' => 'Text',
        'thinking' => 'Thinking',
        'thinkingSignature' => 'ThinkingSignature',
        'time' => 'Time',
        'timestamp' => 'Timestamp',
        'toolName' => 'ToolName',
        'totalTokens' => 'TotalTokens',
        'type' => 'Type',
        'usageCacheRead' => 'UsageCacheRead',
        'usageCacheWrite' => 'UsageCacheWrite',
        'usageCostCacheRead' => 'UsageCostCacheRead',
        'usageCostCacheWrite' => 'UsageCostCacheWrite',
        'usageCostInput' => 'UsageCostInput',
        'usageCostOutput' => 'UsageCostOutput',
        'usageCostTotal' => 'UsageCostTotal',
        'usageInput' => 'UsageInput',
        'usageOutput' => 'UsageOutput',
        'usageTotalTokens' => 'UsageTotalTokens',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agent) {
            $res['Agent'] = $this->agent;
        }

        if (null !== $this->api) {
            $res['Api'] = $this->api;
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->detailDurationMs) {
            $res['DetailDurationMs'] = $this->detailDurationMs;
        }

        if (null !== $this->detailIsError) {
            $res['DetailIsError'] = $this->detailIsError;
        }

        if (null !== $this->detailStatus) {
            $res['DetailStatus'] = $this->detailStatus;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }

        if (null !== $this->provider) {
            $res['Provider'] = $this->provider;
        }

        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->stopReason) {
            $res['StopReason'] = $this->stopReason;
        }

        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        if (null !== $this->thinking) {
            $res['Thinking'] = $this->thinking;
        }

        if (null !== $this->thinkingSignature) {
            $res['ThinkingSignature'] = $this->thinkingSignature;
        }

        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        if (null !== $this->toolName) {
            $res['ToolName'] = $this->toolName;
        }

        if (null !== $this->totalTokens) {
            $res['TotalTokens'] = $this->totalTokens;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->usageCacheRead) {
            $res['UsageCacheRead'] = $this->usageCacheRead;
        }

        if (null !== $this->usageCacheWrite) {
            $res['UsageCacheWrite'] = $this->usageCacheWrite;
        }

        if (null !== $this->usageCostCacheRead) {
            $res['UsageCostCacheRead'] = $this->usageCostCacheRead;
        }

        if (null !== $this->usageCostCacheWrite) {
            $res['UsageCostCacheWrite'] = $this->usageCostCacheWrite;
        }

        if (null !== $this->usageCostInput) {
            $res['UsageCostInput'] = $this->usageCostInput;
        }

        if (null !== $this->usageCostOutput) {
            $res['UsageCostOutput'] = $this->usageCostOutput;
        }

        if (null !== $this->usageCostTotal) {
            $res['UsageCostTotal'] = $this->usageCostTotal;
        }

        if (null !== $this->usageInput) {
            $res['UsageInput'] = $this->usageInput;
        }

        if (null !== $this->usageOutput) {
            $res['UsageOutput'] = $this->usageOutput;
        }

        if (null !== $this->usageTotalTokens) {
            $res['UsageTotalTokens'] = $this->usageTotalTokens;
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
        if (isset($map['Agent'])) {
            $model->agent = $map['Agent'];
        }

        if (isset($map['Api'])) {
            $model->api = $map['Api'];
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['DetailDurationMs'])) {
            $model->detailDurationMs = $map['DetailDurationMs'];
        }

        if (isset($map['DetailIsError'])) {
            $model->detailIsError = $map['DetailIsError'];
        }

        if (isset($map['DetailStatus'])) {
            $model->detailStatus = $map['DetailStatus'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }

        if (isset($map['Provider'])) {
            $model->provider = $map['Provider'];
        }

        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StopReason'])) {
            $model->stopReason = $map['StopReason'];
        }

        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        if (isset($map['Thinking'])) {
            $model->thinking = $map['Thinking'];
        }

        if (isset($map['ThinkingSignature'])) {
            $model->thinkingSignature = $map['ThinkingSignature'];
        }

        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        if (isset($map['ToolName'])) {
            $model->toolName = $map['ToolName'];
        }

        if (isset($map['TotalTokens'])) {
            $model->totalTokens = $map['TotalTokens'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['UsageCacheRead'])) {
            $model->usageCacheRead = $map['UsageCacheRead'];
        }

        if (isset($map['UsageCacheWrite'])) {
            $model->usageCacheWrite = $map['UsageCacheWrite'];
        }

        if (isset($map['UsageCostCacheRead'])) {
            $model->usageCostCacheRead = $map['UsageCostCacheRead'];
        }

        if (isset($map['UsageCostCacheWrite'])) {
            $model->usageCostCacheWrite = $map['UsageCostCacheWrite'];
        }

        if (isset($map['UsageCostInput'])) {
            $model->usageCostInput = $map['UsageCostInput'];
        }

        if (isset($map['UsageCostOutput'])) {
            $model->usageCostOutput = $map['UsageCostOutput'];
        }

        if (isset($map['UsageCostTotal'])) {
            $model->usageCostTotal = $map['UsageCostTotal'];
        }

        if (isset($map['UsageInput'])) {
            $model->usageInput = $map['UsageInput'];
        }

        if (isset($map['UsageOutput'])) {
            $model->usageOutput = $map['UsageOutput'];
        }

        if (isset($map['UsageTotalTokens'])) {
            $model->usageTotalTokens = $map['UsageTotalTokens'];
        }

        return $model;
    }
}
