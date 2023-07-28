<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class PutDcdnKvNamespaceRequest extends Model
{
    /**
     * @description The description of the namespace.
     *
     * @example the first namespace
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the namespace. The name can contain letters, digits, hyphens (-), and underscores (\_).
     *
     * @example ns1
     *
     * @var string
     */
    public $namespace;
    protected $_name = [
        'description' => 'Description',
        'namespace'   => 'Namespace',
    ];

    public function validate()
    {
    }

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
     * @return PutDcdnKvNamespaceRequest
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
