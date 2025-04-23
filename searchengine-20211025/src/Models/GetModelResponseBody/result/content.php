<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetModelResponseBody\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetModelResponseBody\result\content\request;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetModelResponseBody\result\content\response;

class content extends Model
{
    /**
     * @var string
     */
    public $method;

    /**
     * @var string
     */
    public $modelName;

    /**
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

    public function validate()
    {
        if (null !== $this->request) {
            $this->request->validate();
        }
        if (null !== $this->response) {
            $this->response->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['request'] = null !== $this->request ? $this->request->toArray($noStream) : $this->request;
        }

        if (null !== $this->response) {
            $res['response'] = null !== $this->response ? $this->response->toArray($noStream) : $this->response;
        }

        if (null !== $this->url) {
            $res['url'] = $this->url;
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
