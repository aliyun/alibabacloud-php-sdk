<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ImportK8sClusterRequest extends Model
{
    /**
     * @description The ID of the ACK cluster or serverless Kubernetes cluster. You can obtain the cluster ID by calling the GetK8sCluster operation. For more information, see [GetK8sCluster](~~181437~~).
     *
     * @example 9c28bbb9-****-44b3-b953-54ef8a2d0be2
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description Specifies whether to enable the integration with Alibaba Cloud Service Mesh (ASM). Valid values:
     *
     *   true: Enables the integration with ASM.
     *   false: Disables the integration with ASM.
     *
     * @example true
     *
     * @var bool
     */
    public $enableAsm;

    /**
     * @description You can ignore this parameter.
     *
     * @example 1
     *
     * @var int
     */
    public $mode;

    /**
     * @description The ID of the namespace. It is in the format of `Region ID:Identifier of the microservices namespace`. Example: `cn-hangzhou:doc`.
     *
     * @example cn-beijing:doc
     *
     * @var string
     */
    public $namespaceId;
    protected $_name = [
        'clusterId'   => 'ClusterId',
        'enableAsm'   => 'EnableAsm',
        'mode'        => 'Mode',
        'namespaceId' => 'NamespaceId',
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
        if (null !== $this->enableAsm) {
            $res['EnableAsm'] = $this->enableAsm;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportK8sClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['EnableAsm'])) {
            $model->enableAsm = $map['EnableAsm'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }

        return $model;
    }
}
