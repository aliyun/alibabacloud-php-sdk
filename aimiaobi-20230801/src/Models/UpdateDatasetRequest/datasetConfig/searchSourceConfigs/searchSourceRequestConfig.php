<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\UpdateDatasetRequest\datasetConfig\searchSourceConfigs;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\UpdateDatasetRequest\datasetConfig\searchSourceConfigs\searchSourceRequestConfig\headers;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\UpdateDatasetRequest\datasetConfig\searchSourceConfigs\searchSourceRequestConfig\params;

class searchSourceRequestConfig extends Model
{
    /**
     * @var string
     */
    public $body;

    /**
     * @var int
     */
    public $connectTimeout;

    /**
     * @var headers[]
     */
    public $headers;

    /**
     * @var string
     */
    public $method;

    /**
     * @var params[]
     */
    public $params;

    /**
     * @var bool
     */
    public $pathParamsEnable;

    /**
     * @var int
     */
    public $socketTimeout;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'body' => 'Body',
        'connectTimeout' => 'ConnectTimeout',
        'headers' => 'Headers',
        'method' => 'Method',
        'params' => 'Params',
        'pathParamsEnable' => 'PathParamsEnable',
        'socketTimeout' => 'SocketTimeout',
        'url' => 'Url',
    ];

    public function validate()
    {
        if (\is_array($this->headers)) {
            Model::validateArray($this->headers);
        }
        if (\is_array($this->params)) {
            Model::validateArray($this->params);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->body) {
            $res['Body'] = $this->body;
        }

        if (null !== $this->connectTimeout) {
            $res['ConnectTimeout'] = $this->connectTimeout;
        }

        if (null !== $this->headers) {
            if (\is_array($this->headers)) {
                $res['Headers'] = [];
                $n1 = 0;
                foreach ($this->headers as $item1) {
                    $res['Headers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }

        if (null !== $this->params) {
            if (\is_array($this->params)) {
                $res['Params'] = [];
                $n1 = 0;
                foreach ($this->params as $item1) {
                    $res['Params'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['Headers'] as $item1) {
                    $model->headers[$n1] = headers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }

        if (isset($map['Params'])) {
            if (!empty($map['Params'])) {
                $model->params = [];
                $n1 = 0;
                foreach ($map['Params'] as $item1) {
                    $model->params[$n1] = params::fromMap($item1);
                    ++$n1;
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
