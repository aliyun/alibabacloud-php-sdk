<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ConvertK8sResourceRequest extends Model
{
    /**
     * @description The ID of the cluster. You can call the ListCluster operation to query the cluster ID. For more information, see [ListCluster](~~154995~~).
     *
     * @example b07c8192-****-adf4f7447720
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The namespace.
     *
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The name of the resource.
     *
     * @example deployment-to-convert
     *
     * @var string
     */
    public $resourceName;

    /**
     * @description The type of the resource that is used. Set the value to deployment.
     *
     * @example deployment
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'clusterId'    => 'ClusterId',
        'namespace'    => 'Namespace',
        'resourceName' => 'ResourceName',
        'resourceType' => 'ResourceType',
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
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConvertK8sResourceRequest
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
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
