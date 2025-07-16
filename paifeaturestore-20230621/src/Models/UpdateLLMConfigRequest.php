<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\Tea\Model;

class UpdateLLMConfigRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example apikey-***
     *
     * @var string
     */
    public $apiKey;

    /**
     * @description This parameter is required.
     *
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
     * @description This parameter is required.
     *
     * @example 2048
     *
     * @var int
     */
    public $maxTokens;

    /**
     * @description This parameter is required.
     *
     * @example text-embedding-v1
     *
     * @var string
     */
    public $model;

    /**
     * @description This parameter is required.
     *
     * @example llm-config1
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @example 30
     *
     * @var int
     */
    public $rps;
    protected $_name = [
        'apiKey' => 'ApiKey',
        'baseUrl' => 'BaseUrl',
        'batchSize' => 'BatchSize',
        'maxTokens' => 'MaxTokens',
        'model' => 'Model',
        'name' => 'Name',
        'rps' => 'Rps',
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
        if (null !== $this->maxTokens) {
            $res['MaxTokens'] = $this->maxTokens;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->rps) {
            $res['Rps'] = $this->rps;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateLLMConfigRequest
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
        if (isset($map['MaxTokens'])) {
            $model->maxTokens = $map['MaxTokens'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Rps'])) {
            $model->rps = $map['Rps'];
        }

        return $model;
    }
}
