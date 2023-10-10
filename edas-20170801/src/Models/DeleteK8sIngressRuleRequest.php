<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class DeleteK8sIngressRuleRequest extends Model
{
    /**
     * @description The ID of the Kubernetes cluster.
     *
     * @example 5b2b4ab4-efbc-4a81-9c45-xxxxxxxxxxxxx
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The name of the Ingress. The name can contain lowercase letters, digits, and hyphens (-). It must start with a lowercase letter but cannot end with a hyphen (-). The name can be up to 63 characters in length.
     *
     * @example my-ingress-rule
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
     * @return DeleteK8sIngressRuleRequest
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
