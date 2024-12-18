<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\CreateDatasetRequest\datasetConfig\searchSourceConfigs;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\CreateDatasetRequest\datasetConfig\searchSourceConfigs\searchSourceRequestConfig\headers;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\CreateDatasetRequest\datasetConfig\searchSourceConfigs\searchSourceRequestConfig\params;
use AlibabaCloud\Tea\Model;

class searchSourceRequestConfig extends Model
{
    /**
     * @example {}
     *
     * @var string
     */
    public $body;

    /**
     * @example 3000
     *
     * @var int
     */
    public $connectTimeout;

    /**
     * @var headers[]
     */
    public $headers;

    /**
     * @example 请求方式
     *
     * @var string
     */
    public $method;

    /**
     * @var params[]
     */
    public $params;

    /**
     * @example true
     *
     * @var bool
     */
    public $pathParamsEnable;

    /**
     * @example 3000
     *
     * @var int
     */
    public $socketTimeout;

    /**
     * @example api地址
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'body'             => 'Body',
        'connectTimeout'   => 'ConnectTimeout',
        'headers'          => 'Headers',
        'method'           => 'Method',
        'params'           => 'Params',
        'pathParamsEnable' => 'PathParamsEnable',
        'socketTimeout'    => 'SocketTimeout',
        'url'              => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['Body'] = $this->body;
        }
        if (null !== $this->connectTimeout) {
            $res['ConnectTimeout'] = $this->connectTimeout;
        }
        if (null !== $this->headers) {
            $res['Headers'] = [];
            if (null !== $this->headers && \is_array($this->headers)) {
                $n = 0;
                foreach ($this->headers as $item) {
                    $res['Headers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }
        if (null !== $this->params) {
            $res['Params'] = [];
            if (null !== $this->params && \is_array($this->params)) {
                $n = 0;
                foreach ($this->params as $item) {
                    $res['Params'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pathParamsEnable) {
            $res['PathParamsEnable'] = $this->pathParamsEnable;
        }
        if (null !== $this->socketTimeout) {
            $res['SocketTimeout'] = $this->socketTimeout;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return searchSourceRequestConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Body'])) {
            $model->body = $map['Body'];
        }
        if (isset($map['ConnectTimeout'])) {
            $model->connectTimeout = $map['ConnectTimeout'];
        }
        if (isset($map['Headers'])) {
            if (!empty($map['Headers'])) {
                $model->headers = [];
                $n              = 0;
                foreach ($map['Headers'] as $item) {
                    $model->headers[$n++] = null !== $item ? headers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }
        if (isset($map['Params'])) {
            if (!empty($map['Params'])) {
                $model->params = [];
                $n             = 0;
                foreach ($map['Params'] as $item) {
                    $model->params[$n++] = null !== $item ? params::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PathParamsEnable'])) {
            $model->pathParamsEnable = $map['PathParamsEnable'];
        }
        if (isset($map['SocketTimeout'])) {
            $model->socketTimeout = $map['SocketTimeout'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
