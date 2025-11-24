<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Dara\Model;

class AddClusterIntoServiceMeshRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var bool
     */
    public $discoveryOnly;

    /**
     * @var bool
     */
    public $ignoreNamespaceCheck;

    /**
     * @var string
     */
    public $kubeconfig;

    /**
     * @var string
     */
    public $serviceMeshId;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'discoveryOnly' => 'DiscoveryOnly',
        'ignoreNamespaceCheck' => 'IgnoreNamespaceCheck',
        'kubeconfig' => 'Kubeconfig',
        'serviceMeshId' => 'ServiceMeshId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->discoveryOnly) {
            $res['DiscoveryOnly'] = $this->discoveryOnly;
        }

        if (null !== $this->ignoreNamespaceCheck) {
            $res['IgnoreNamespaceCheck'] = $this->ignoreNamespaceCheck;
        }

        if (null !== $this->kubeconfig) {
            $res['Kubeconfig'] = $this->kubeconfig;
        }

        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['DiscoveryOnly'])) {
            $model->discoveryOnly = $map['DiscoveryOnly'];
        }

        if (isset($map['IgnoreNamespaceCheck'])) {
            $model->ignoreNamespaceCheck = $map['IgnoreNamespaceCheck'];
        }

        if (isset($map['Kubeconfig'])) {
            $model->kubeconfig = $map['Kubeconfig'];
        }

        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }

        return $model;
    }
}
