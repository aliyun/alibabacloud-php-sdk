<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class BatchPutKvWithHighCapacityRequest extends Model
{
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

    /**
     * @description The download URL of the key-value pairs that you want to configure. This parameter is automatically filled in when you use the SDK to call the operation.
     *
     * This parameter is required.
     *
     * @example https://xxxobject.oss-cn-reginon.aliyuncs.com/9d91_xxxxxxxxxxx_158bb6e0f97c477791209bb46bd599f7
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'namespace' => 'Namespace',
        'url' => 'Url',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchPutKvWithHighCapacityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
