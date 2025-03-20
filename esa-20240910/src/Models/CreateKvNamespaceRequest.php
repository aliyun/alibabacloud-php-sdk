<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class CreateKvNamespaceRequest extends Model
{
    /**
     * @description The description of the namespace.
     *
     * @example this is a test namespace.
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the namespace.
     *
     * This parameter is required.
     *
     * @example test_namespace
     *
     * @var string
     */
    public $namespace;
    protected $_name = [
        'description' => 'Description',
        'namespace' => 'Namespace',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateKvNamespaceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        return $model;
    }
}
