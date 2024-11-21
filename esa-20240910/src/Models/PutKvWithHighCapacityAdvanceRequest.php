<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class PutKvWithHighCapacityAdvanceRequest extends Model
{
    /**
     * @description The key name. The name can be up to 512 characters in length and cannot contain spaces or backslashes (\\\\).
     *
     * This parameter is required.
     * @example test_key
     *
     * @var string
     */
    public $key;

    /**
     * @description The name of the namespace that you specify when you call the [CreateKvNamespace](https://help.aliyun.com/document_detail/2850317.html) operation.
     *
     * This parameter is required.
     * @example test_namesapce
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The download URL of the key-value pair that you want to upload. This parameter is automatically filled in when you use the SDK to call the operation.
     *
     * This parameter is required.
     * @example https://xxxobject.oss-cn-reginon.aliyuncs.com/9d91_xxxxxxxxxxx_158bb6e0f97c477791209bb46bd599f7
     *
     * @var Stream
     */
    public $urlObject;
    protected $_name = [
        'key'       => 'Key',
        'namespace' => 'Namespace',
        'urlObject' => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->urlObject) {
            $res['Url'] = $this->urlObject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutKvWithHighCapacityAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['Url'])) {
            $model->urlObject = $map['Url'];
        }

        return $model;
    }
}
