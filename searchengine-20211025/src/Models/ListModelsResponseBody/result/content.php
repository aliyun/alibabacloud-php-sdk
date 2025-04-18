<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ListModelsResponseBody\result;

use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListModelsResponseBody\result\content\request;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListModelsResponseBody\result\content\response;
use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @example POST
     *
     * @var string
     */
    public $method;

    /**
     * @example test
     *
     * @var string
     */
    public $modelName;

    /**
     * @example text_embedding
     *
     * @var string
     */
    public $modelType;

    /**
     * @var request
     */
    public $request;

    /**
     * @var response
     */
    public $response;

    /**
     * @example http://***.platform-cn-shanghai.opensearch.aliyuncs.com/v3/openapi/workspaces/default/text-embedding/ops-text-embedding-001
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'method' => 'method',
        'modelName' => 'modelName',
        'modelType' => 'modelType',
        'request' => 'request',
        'response' => 'response',
        'url' => 'url',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->method) {
            $res['method'] = $this->method;
        }
        if (null !== $this->modelName) {
            $res['modelName'] = $this->modelName;
        }
        if (null !== $this->modelType) {
            $res['modelType'] = $this->modelType;
        }
        if (null !== $this->request) {
            $res['request'] = null !== $this->request ? $this->request->toMap() : null;
        }
        if (null !== $this->response) {
            $res['response'] = null !== $this->response ? $this->response->toMap() : null;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['method'])) {
            $model->method = $map['method'];
        }
        if (isset($map['modelName'])) {
            $model->modelName = $map['modelName'];
        }
        if (isset($map['modelType'])) {
            $model->modelType = $map['modelType'];
        }
        if (isset($map['request'])) {
            $model->request = request::fromMap($map['request']);
        }
        if (isset($map['response'])) {
            $model->response = response::fromMap($map['response']);
        }
        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
