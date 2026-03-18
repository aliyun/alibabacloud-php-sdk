<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class RequestLogDTO extends Model
{
    /**
     * @var int
     */
    public $apiKeyId;

    /**
     * @var int
     */
    public $clientId;

    /**
     * @var int
     */
    public $completionTokens;

    /**
     * @var int
     */
    public $deleteTag;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $modelId;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var int
     */
    public $promptTokens;

    /**
     * @var string
     */
    public $requestBody;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $requestTime;

    /**
     * @var string
     */
    public $responseBody;

    /**
     * @var int
     */
    public $responseTimeMs;

    /**
     * @var int
     */
    public $statusCode;

    /**
     * @var int
     */
    public $totalTokens;
    protected $_name = [
        'apiKeyId' => 'apiKeyId',
        'clientId' => 'clientId',
        'completionTokens' => 'completionTokens',
        'deleteTag' => 'deleteTag',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'id' => 'id',
        'modelId' => 'modelId',
        'modelName' => 'modelName',
        'promptTokens' => 'promptTokens',
        'requestBody' => 'requestBody',
        'requestId' => 'requestId',
        'requestTime' => 'requestTime',
        'responseBody' => 'responseBody',
        'responseTimeMs' => 'responseTimeMs',
        'statusCode' => 'statusCode',
        'totalTokens' => 'totalTokens',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKeyId) {
            $res['apiKeyId'] = $this->apiKeyId;
        }

        if (null !== $this->clientId) {
            $res['clientId'] = $this->clientId;
        }

        if (null !== $this->completionTokens) {
            $res['completionTokens'] = $this->completionTokens;
        }

        if (null !== $this->deleteTag) {
            $res['deleteTag'] = $this->deleteTag;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->modelId) {
            $res['modelId'] = $this->modelId;
        }

        if (null !== $this->modelName) {
            $res['modelName'] = $this->modelName;
        }

        if (null !== $this->promptTokens) {
            $res['promptTokens'] = $this->promptTokens;
        }

        if (null !== $this->requestBody) {
            $res['requestBody'] = $this->requestBody;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->requestTime) {
            $res['requestTime'] = $this->requestTime;
        }

        if (null !== $this->responseBody) {
            $res['responseBody'] = $this->responseBody;
        }

        if (null !== $this->responseTimeMs) {
            $res['responseTimeMs'] = $this->responseTimeMs;
        }

        if (null !== $this->statusCode) {
            $res['statusCode'] = $this->statusCode;
        }

        if (null !== $this->totalTokens) {
            $res['totalTokens'] = $this->totalTokens;
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
        if (isset($map['apiKeyId'])) {
            $model->apiKeyId = $map['apiKeyId'];
        }

        if (isset($map['clientId'])) {
            $model->clientId = $map['clientId'];
        }

        if (isset($map['completionTokens'])) {
            $model->completionTokens = $map['completionTokens'];
        }

        if (isset($map['deleteTag'])) {
            $model->deleteTag = $map['deleteTag'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['modelId'])) {
            $model->modelId = $map['modelId'];
        }

        if (isset($map['modelName'])) {
            $model->modelName = $map['modelName'];
        }

        if (isset($map['promptTokens'])) {
            $model->promptTokens = $map['promptTokens'];
        }

        if (isset($map['requestBody'])) {
            $model->requestBody = $map['requestBody'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['requestTime'])) {
            $model->requestTime = $map['requestTime'];
        }

        if (isset($map['responseBody'])) {
            $model->responseBody = $map['responseBody'];
        }

        if (isset($map['responseTimeMs'])) {
            $model->responseTimeMs = $map['responseTimeMs'];
        }

        if (isset($map['statusCode'])) {
            $model->statusCode = $map['statusCode'];
        }

        if (isset($map['totalTokens'])) {
            $model->totalTokens = $map['totalTokens'];
        }

        return $model;
    }
}
