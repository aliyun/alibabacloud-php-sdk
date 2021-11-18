<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20210226\Models;

use AlibabaCloud\Tea\Model;

class ImageNamespace extends Model
{
    /**
     * @description 命名空间名称
     *
     * @var string
     */
    public $namespace;

    /**
     * @description 命名空间状态
     *
     * @var string
     */
    public $namespaceStatus;
    protected $_name = [
        'namespace'       => 'Namespace',
        'namespaceStatus' => 'NamespaceStatus',
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
        if (null !== $this->namespaceStatus) {
            $res['NamespaceStatus'] = $this->namespaceStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImageNamespace
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['NamespaceStatus'])) {
            $model->namespaceStatus = $map['NamespaceStatus'];
        }

        return $model;
    }
}
