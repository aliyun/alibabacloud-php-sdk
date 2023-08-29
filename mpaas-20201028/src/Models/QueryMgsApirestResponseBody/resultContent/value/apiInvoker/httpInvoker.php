<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMgsApirestResponseBody\resultContent\value\apiInvoker;

use AlibabaCloud\Tea\Model;

class httpInvoker extends Model
{
    /**
     * @var string
     */
    public $charset;

    /**
     * @var string
     */
    public $contentType;

    /**
     * @var string
     */
    public $host;

    /**
     * @var string
     */
    public $method;

    /**
     * @var string
     */
    public $path;
    protected $_name = [
        'charset'     => 'Charset',
        'contentType' => 'ContentType',
        'host'        => 'Host',
        'method'      => 'Method',
        'path'        => 'Path',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->charset) {
            $res['Charset'] = $this->charset;
        }
        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return httpInvoker
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Charset'])) {
            $model->charset = $map['Charset'];
        }
        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        return $model;
    }
}
