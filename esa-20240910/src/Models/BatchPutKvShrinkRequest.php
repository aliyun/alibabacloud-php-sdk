<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class BatchPutKvShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $kvListShrink;

    /**
     * @description This parameter is required.
     *
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
