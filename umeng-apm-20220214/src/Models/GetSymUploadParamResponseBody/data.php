<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengapm\V20220214\Models\GetSymUploadParamResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example LTAI5tM4ZXXXXX
     *
     * @var string
     */
    public $accessKeyId;

    /**
     * @example eyJjYWxsYmFja1VybCI6Imh0dHBzOi8vYXBtLnVtZW5nLmNvbS9oc2Yvc3ltL29zcy9ub3RpZnlNc2ciLCJjYqc29uIn0=
     *
     * @var string
     */
    public $callback;

    /**
     * @example tmp/20220428/5fb6001a73749c24fd9cb356_f49a08dc1225438188c109fcf92eb9f3/symbol.zip
     *
     * @var string
     */
    public $key;

    /**
     * @example eyJleHBpcmF0aW9uIjoiMjAyMi0wNC0yOFQwNDoxMzo0MS43OTJaIiwiY29uZGl0aW9ucyI6W1siZXEiLCIka2V5IiwidG1WpveGZTSXNJbU5oYkd4aVlXTnJRbTlrZVZSNWNHVWlPaUpoY0hCc2FXTmhkR2x2Ymk5cWMyOXVJbjA9In1dfQ==
     *
     * @var string
     */
    public $policy;

    /**
     * @example 3f67c435e08d164f41f6e522a2b5d1d7feb93000
     *
     * @var string
     */
    public $signature;

    /**
     * @example https://quickbird.oss-cn-shanghai.aliyuncs.com
     *
     * @var string
     */
    public $uploadAddress;
    protected $_name = [
        'accessKeyId'   => 'accessKeyId',
        'callback'      => 'callback',
        'key'           => 'key',
        'policy'        => 'policy',
        'signature'     => 'signature',
        'uploadAddress' => 'uploadAddress',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKeyId) {
            $res['accessKeyId'] = $this->accessKeyId;
        }
        if (null !== $this->callback) {
            $res['callback'] = $this->callback;
        }
        if (null !== $this->key) {
            $res['key'] = $this->key;
        }
        if (null !== $this->policy) {
            $res['policy'] = $this->policy;
        }
        if (null !== $this->signature) {
            $res['signature'] = $this->signature;
        }
        if (null !== $this->uploadAddress) {
            $res['uploadAddress'] = $this->uploadAddress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accessKeyId'])) {
            $model->accessKeyId = $map['accessKeyId'];
        }
        if (isset($map['callback'])) {
            $model->callback = $map['callback'];
        }
        if (isset($map['key'])) {
            $model->key = $map['key'];
        }
        if (isset($map['policy'])) {
            $model->policy = $map['policy'];
        }
        if (isset($map['signature'])) {
            $model->signature = $map['signature'];
        }
        if (isset($map['uploadAddress'])) {
            $model->uploadAddress = $map['uploadAddress'];
        }

        return $model;
    }
}
