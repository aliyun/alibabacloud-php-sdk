<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class UpdateKvNamespaceRequest extends Model
{
    /**
     * @description The name of the namespace that you specify when you call the [CreateKvNamespace](https://help.aliyun.com/document_detail/2850317.html) operation.
     *
     * This parameter is required.
     * @example ns1
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The new name of the namespace.
     *
     * This parameter is required.
     * @example new_ns
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'namespace' => 'Namespace',
        'title'     => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateKvNamespaceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
