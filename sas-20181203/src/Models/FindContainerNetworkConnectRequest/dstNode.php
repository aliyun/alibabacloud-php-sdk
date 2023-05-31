<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\FindContainerNetworkConnectRequest;

use AlibabaCloud\Tea\Model;

class dstNode extends Model
{
    /**
     * @description The name of the container application.
     *
     * @example nginx-ingress-controller
     *
     * @var string
     */
    public $appName;

    /**
     * @description The ID of the container cluster.
     *
     * > You can call the [DescribeGroupedContainerInstances](~~DescribeGroupedContainerInstances~~) operation to query the IDs of container clusters.
     * @example f5x833820xx
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The namespace of the cluster.
     *
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The node IDs.
     *
     * @var string[]
     */
    public $nodeIds;

    /**
     * @description The type of the node. Valid values:
     *
     *   **app**: application, which indicates that the node type is application.
     *
     * @example app
     *
     * @var string
     */
    public $nodeType;

    /**
     * @description The name of the pod.
     *
     * @example abc-deployment-yacs-31144-39265-1384966-7f8c8cd578-h6mhb
     *
     * @var string
     */
    public $podName;
    protected $_name = [
        'appName'   => 'AppName',
        'clusterId' => 'ClusterId',
        'namespace' => 'Namespace',
        'nodeIds'   => 'NodeIds',
        'nodeType'  => 'NodeType',
        'podName'   => 'PodName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->nodeIds) {
            $res['NodeIds'] = $this->nodeIds;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->podName) {
            $res['PodName'] = $this->podName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dstNode
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['NodeIds'])) {
            if (!empty($map['NodeIds'])) {
                $model->nodeIds = $map['NodeIds'];
            }
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['PodName'])) {
            $model->podName = $map['PodName'];
        }

        return $model;
    }
}
