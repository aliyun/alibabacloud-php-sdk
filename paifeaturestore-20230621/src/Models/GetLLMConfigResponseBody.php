<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\Tea\Model;

class GetLLMConfigResponseBody extends Model
{
    /**
     * @example api-abcdxy
     *
     * @var string
     */
    public $apiKey;

    /**
     * @example https://dashscope.aliyuncs.com/compatible-mode/v1
     *
     * @var string
     */
    public $baseUrl;

    /**
     * @example 8
     *
     * @var int
     */
    public $batchSize;

    /**
     * @example 2023-07-04T11:26:09.036+08:00
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @example 2023-07-04T11:26:09.036+08:00
     *
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @example llm_config1
     *
     * @var string
     */
    public $LLMConfigId;

    /**
     * @example 2048
     *
     * @var int
     */
    public $maxTokens;

    /**
     * @example text-embedding-v1
     *
     * @var string
     */
    public $model;

    /**
     * @example llm_config_name1
     *
     * @var string
     */
    public $name;

    /**
     * @description Id of the request
     *
     * @example C03B2680-AC9C-59CD-93C5-8142B92537FA
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 30
     *
     * @var int
     */
    public $rps;

    /**
     * @example 234
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'apiKey' => 'ApiKey',
        'baseUrl' => 'BaseUrl',
        'batchSize' => 'BatchSize',
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'LLMConfigId' => 'LLMConfigId',
        'maxTokens' => 'MaxTokens',
        'model' => 'Model',
        'name' => 'Name',
        'requestId' => 'RequestId',
        'rps' => 'Rps',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiKey) {
            $res['ApiKey'] = $this->apiKey;
        }
        if (null !== $this->baseUrl) {
            $res['BaseUrl'] = $this->baseUrl;
        }
        if (null !== $this->batchSize) {
            $res['BatchSize'] = $this->batchSize;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->LLMConfigId) {
            $res['LLMConfigId'] = $this->LLMConfigId;
        }
        if (null !== $this->maxTokens) {
            $res['MaxTokens'] = $this->maxTokens;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->rps) {
            $res['Rps'] = $this->rps;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLLMConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiKey'])) {
            $model->apiKey = $map['ApiKey'];
        }
        if (isset($map['BaseUrl'])) {
            $model->baseUrl = $map['BaseUrl'];
        }
        if (isset($map['BatchSize'])) {
            $model->batchSize = $map['BatchSize'];
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['LLMConfigId'])) {
            $model->LLMConfigId = $map['LLMConfigId'];
        }
        if (isset($map['MaxTokens'])) {
            $model->maxTokens = $map['MaxTokens'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Rps'])) {
            $model->rps = $map['Rps'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
