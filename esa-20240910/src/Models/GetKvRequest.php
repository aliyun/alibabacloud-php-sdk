<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class GetKvRequest extends Model
{
    /**
     * @description Specifies whether to decode the value by using Base 64. If you call the [PutKv](https://help.aliyun.com/document_detail/2850482.html) operation and set the Base64 parameter to true, set this parameter to true to read the original content.
     *
     * @example true
     *
     * @var bool
     */
    public $base64;

    /**
     * @description The key name for the query.
     *
     * This parameter is required.
     *
     * @example test_key
     *
     * @var string
     */
    public $key;

    /**
     * @description The name of the namespace that you specify when you call the [CreateKvNamespace](https://help.aliyun.com/document_detail/2850317.html) operation.
     *
     * This parameter is required.
     *
     * @example test_namespace
     *
     * @var string
     */
    public $namespace;
    protected $_name = [
        'base64' => 'Base64',
        'key' => 'Key',
        'namespace' => 'Namespace',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->base64) {
            $res['Base64'] = $this->base64;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetKvRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Base64'])) {
            $model->base64 = $map['Base64'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        return $model;
    }
}
