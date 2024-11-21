<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class BatchDeleteKvShrinkRequest extends Model
{
    /**
     * @description The keys that you want to delete. You can delete a maximum of 10,000 key-value pairs at a time.
     *
     * This parameter is required.
     * @var string
     */
    public $keysShrink;

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
        'keysShrink' => 'Keys',
        'namespace'  => 'Namespace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keysShrink) {
            $res['Keys'] = $this->keysShrink;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchDeleteKvShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Keys'])) {
            $model->keysShrink = $map['Keys'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        return $model;
    }
}
