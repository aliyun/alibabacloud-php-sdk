<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class BatchDeleteKvShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $keysShrink;

    /**
     * @description This parameter is required.
     *
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
