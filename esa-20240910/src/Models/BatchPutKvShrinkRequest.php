<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class BatchPutKvShrinkRequest extends Model
{
    /**
     * @description The key-value pairs that you want to configure at a time. The total size can be up to 2 MB (2 × 1000 × 1000).
     *
     * This parameter is required.
     * @var string
     */
    public $kvListShrink;

    /**
     * @description The name of the namespace that you specify when you call the [CreateKvNamespace](https://help.aliyun.com/document_detail/2850317.html) operation.
     *
     * This parameter is required.
     * @example test_namespace
     *
     * @var string
     */
    public $namespace;
    protected $_name = [
        'kvListShrink' => 'KvList',
        'namespace'    => 'Namespace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->kvListShrink) {
            $res['KvList'] = $this->kvListShrink;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchPutKvShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KvList'])) {
            $model->kvListShrink = $map['KvList'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        return $model;
    }
}
