<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class UpdateK8sConfigMapRequest extends Model
{
    /**
     * @description The ID of the Kubernetes cluster.
     *
     * @example 7246cxxx-53xx-xxxx-xxxx-xxxxxxxx
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The data of the ConfigMap. Set this parameter to a JSON string.
     *
     * @example [{"Key":"name","Value":"william"},{"Key":"age","Value":"12"}]
     *
     * @var mixed[]
     */
    public $data;

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
        'data'      => 'Data',
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
        if (null !== $this->data) {
            $res['Data'] = $this->data;
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
     * @return UpdateK8sConfigMapRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
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
