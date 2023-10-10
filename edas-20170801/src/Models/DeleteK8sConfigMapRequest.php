<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class DeleteK8sConfigMapRequest extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * @example 51e37e91-6403-423a-9913-f236aa7a6a50
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The name of the ConfigMap. The name must start with a letter, and can contain digits, letters, and hyphens (-). It can be up to 63 characters in length.
     *
     * @example my-configmap
     *
     * @var string
     */
    public $name;

    /**
     * @description The namespace of the Kubernetes cluster.
     *
     * @example default
     *
     * @var string
     */
    public $namespace;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'name'      => 'Name',
        'namespace' => 'Namespace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteK8sConfigMapRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        return $model;
    }
}
