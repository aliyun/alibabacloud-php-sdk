<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeContainerServiceK8sClusterNamespacesResponseBody;

use AlibabaCloud\Tea\Model;

class k8sClusterNamespaces extends Model
{
    /**
     * @description The namespace.
     *
     * @example default
     *
     * @var string
     */
    public $namespace;
    protected $_name = [
        'namespace' => 'Namespace',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return k8sClusterNamespaces
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        return $model;
    }
}
