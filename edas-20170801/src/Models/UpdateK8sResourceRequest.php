<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class UpdateK8sResourceRequest extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * @example 2e7059e9-2d********5e8ecac64ff
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The ID of the namespace to which the Kubernetes resource belongs.
     *
     * @example app-namespace
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The description of the resource in the YAML format.
     *
     * @example apiVersion: apps/v1 kind: Deployment metadata:   name: demo-app   namespace: app-namespace spec:   replicas: 3   selector:     matchLabels:       cluster: abc   template: # create pods using pod definition in this template     metadata:       labels:         cluster: abc     spec:       containers:       - image: registry-vpc.cn-hangzhou.aliyuncs.com/edas-demo-image/consumer:1.0         imagePullPolicy: Always         name: test-container         ports:         - containerPort: 80         env:         - name: foo           value: bar
     *
     * @var string
     */
    public $resourceContent;
    protected $_name = [
        'clusterId'       => 'ClusterId',
        'namespace'       => 'Namespace',
        'resourceContent' => 'ResourceContent',
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
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->resourceContent) {
            $res['ResourceContent'] = $this->resourceContent;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateK8sResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['ResourceContent'])) {
            $model->resourceContent = $map['ResourceContent'];
        }

        return $model;
    }
}
