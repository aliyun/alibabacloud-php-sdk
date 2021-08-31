<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoTriggerRecordResponseBody;

use AlibabaCloud\Tea\Model;

class repoTriggerRecords extends Model
{
    /**
     * @var string
     */
    public $requestHeaders;

    /**
     * @var string
     */
    public $triggerName;

    /**
     * @var string
     */
    public $responseHeaders;

    /**
     * @var string
     */
    public $triggerLogId;

    /**
     * @var string
     */
    public $responseBody;

    /**
     * @var string
     */
    public $triggerUrl;

    /**
     * @var string
     */
    public $requestBody;

    /**
     * @var string
     */
    public $triggerType;

    /**
     * @var string
     */
    public $triggerTag;

    /**
     * @var string
     */
    public $statusCode;

    /**
     * @var string
     */
    public $repoEvent;

    /**
     * @var string
     */
    public $triggerId;

    /**
     * @var int
     */
    public $requestTime;
    protected $_name = [
        'requestHeaders'  => 'RequestHeaders',
        'triggerName'     => 'TriggerName',
        'responseHeaders' => 'ResponseHeaders',
        'triggerLogId'    => 'TriggerLogId',
        'responseBody'    => 'ResponseBody',
        'triggerUrl'      => 'TriggerUrl',
        'requestBody'     => 'RequestBody',
        'triggerType'     => 'TriggerType',
        'triggerTag'      => 'TriggerTag',
        'statusCode'      => 'StatusCode',
        'repoEvent'       => 'RepoEvent',
        'triggerId'       => 'TriggerId',
        'requestTime'     => 'RequestTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestHeaders) {
            $res['RequestHeaders'] = $this->requestHeaders;
        }
        if (null !== $this->triggerName) {
            $res['TriggerName'] = $this->triggerName;
        }
        if (null !== $this->responseHeaders) {
            $res['ResponseHeaders'] = $this->responseHeaders;
        }
        if (null !== $this->triggerLogId) {
            $res['TriggerLogId'] = $this->triggerLogId;
        }
        if (null !== $this->responseBody) {
            $res['ResponseBody'] = $this->responseBody;
        }
        if (null !== $this->triggerUrl) {
            $res['TriggerUrl'] = $this->triggerUrl;
        }
        if (null !== $this->requestBody) {
            $res['RequestBody'] = $this->requestBody;
        }
        if (null !== $this->triggerType) {
            $res['TriggerType'] = $this->triggerType;
        }
        if (null !== $this->triggerTag) {
            $res['TriggerTag'] = $this->triggerTag;
        }
        if (null !== $this->statusCode) {
            $res['StatusCode'] = $this->statusCode;
        }
        if (null !== $this->repoEvent) {
            $res['RepoEvent'] = $this->repoEvent;
        }
        if (null !== $this->triggerId) {
            $res['TriggerId'] = $this->triggerId;
        }
        if (null !== $this->requestTime) {
            $res['RequestTime'] = $this->requestTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return repoTriggerRecords
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestHeaders'])) {
            $model->requestHeaders = $map['RequestHeaders'];
        }
        if (isset($map['TriggerName'])) {
            $model->triggerName = $map['TriggerName'];
        }
        if (isset($map['ResponseHeaders'])) {
            $model->responseHeaders = $map['ResponseHeaders'];
        }
        if (isset($map['TriggerLogId'])) {
            $model->triggerLogId = $map['TriggerLogId'];
        }
        if (isset($map['ResponseBody'])) {
            $model->responseBody = $map['ResponseBody'];
        }
        if (isset($map['TriggerUrl'])) {
            $model->triggerUrl = $map['TriggerUrl'];
        }
        if (isset($map['RequestBody'])) {
            $model->requestBody = $map['RequestBody'];
        }
        if (isset($map['TriggerType'])) {
            $model->triggerType = $map['TriggerType'];
        }
        if (isset($map['TriggerTag'])) {
            $model->triggerTag = $map['TriggerTag'];
        }
        if (isset($map['StatusCode'])) {
            $model->statusCode = $map['StatusCode'];
        }
        if (isset($map['RepoEvent'])) {
            $model->repoEvent = $map['RepoEvent'];
        }
        if (isset($map['TriggerId'])) {
            $model->triggerId = $map['TriggerId'];
        }
        if (isset($map['RequestTime'])) {
            $model->requestTime = $map['RequestTime'];
        }

        return $model;
    }
}
