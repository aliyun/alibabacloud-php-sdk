<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudListCurlLogResponseBody\data;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var int
     */
    public $contentType;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $currentMonth;

    /**
     * @var int
     */
    public $delay;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $enterpriseId;

    /**
     * @var string
     */
    public $headers;

    /**
     * @var string
     */
    public $id;

    /**
     * @var int
     */
    public $level;

    /**
     * @var string
     */
    public $method;

    /**
     * @var string
     */
    public $params;

    /**
     * @var string
     */
    public $position;

    /**
     * @var string
     */
    public $requestTime;

    /**
     * @var string
     */
    public $result;

    /**
     * @var string
     */
    public $resultText;

    /**
     * @var int
     */
    public $retry;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $statusCode;

    /**
     * @var string
     */
    public $timeout;

    /**
     * @var int
     */
    public $type;

    /**
     * @var string
     */
    public $typeStr;

    /**
     * @var string
     */
    public $uniqueId;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'contentType' => 'ContentType',
        'createTime' => 'CreateTime',
        'currentMonth' => 'CurrentMonth',
        'delay' => 'Delay',
        'endTime' => 'EndTime',
        'enterpriseId' => 'EnterpriseId',
        'headers' => 'Headers',
        'id' => 'Id',
        'level' => 'Level',
        'method' => 'Method',
        'params' => 'Params',
        'position' => 'Position',
        'requestTime' => 'RequestTime',
        'result' => 'Result',
        'resultText' => 'ResultText',
        'retry' => 'Retry',
        'startTime' => 'StartTime',
        'statusCode' => 'StatusCode',
        'timeout' => 'Timeout',
        'type' => 'Type',
        'typeStr' => 'TypeStr',
        'uniqueId' => 'UniqueId',
        'url' => 'Url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->currentMonth) {
            $res['CurrentMonth'] = $this->currentMonth;
        }

        if (null !== $this->delay) {
            $res['Delay'] = $this->delay;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->enterpriseId) {
            $res['EnterpriseId'] = $this->enterpriseId;
        }

        if (null !== $this->headers) {
            $res['Headers'] = $this->headers;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }

        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }

        if (null !== $this->position) {
            $res['Position'] = $this->position;
        }

        if (null !== $this->requestTime) {
            $res['RequestTime'] = $this->requestTime;
        }

        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }

        if (null !== $this->resultText) {
            $res['ResultText'] = $this->resultText;
        }

        if (null !== $this->retry) {
            $res['Retry'] = $this->retry;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->statusCode) {
            $res['StatusCode'] = $this->statusCode;
        }

        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->typeStr) {
            $res['TypeStr'] = $this->typeStr;
        }

        if (null !== $this->uniqueId) {
            $res['UniqueId'] = $this->uniqueId;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CurrentMonth'])) {
            $model->currentMonth = $map['CurrentMonth'];
        }

        if (isset($map['Delay'])) {
            $model->delay = $map['Delay'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['EnterpriseId'])) {
            $model->enterpriseId = $map['EnterpriseId'];
        }

        if (isset($map['Headers'])) {
            $model->headers = $map['Headers'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }

        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }

        if (isset($map['Position'])) {
            $model->position = $map['Position'];
        }

        if (isset($map['RequestTime'])) {
            $model->requestTime = $map['RequestTime'];
        }

        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        if (isset($map['ResultText'])) {
            $model->resultText = $map['ResultText'];
        }

        if (isset($map['Retry'])) {
            $model->retry = $map['Retry'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['StatusCode'])) {
            $model->statusCode = $map['StatusCode'];
        }

        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['TypeStr'])) {
            $model->typeStr = $map['TypeStr'];
        }

        if (isset($map['UniqueId'])) {
            $model->uniqueId = $map['UniqueId'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
