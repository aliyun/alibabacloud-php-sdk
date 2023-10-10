<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListK8sNamespacesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The namespaces of the Kubernetes cluster.
     *
     * @example development
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
     * @return data
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
