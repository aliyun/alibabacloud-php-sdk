<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCClusterNodesResponseBody;

use AlibabaCloud\Tea\Model;

class nodes extends Model
{
    /**
     * @description The time when the node was created.
     *
     * @example 2024-10-21T07:20:09Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The container version.
     *
     * @example 1.0
     *
     * @var string
     */
    public $dockerVersion;

    /**
     * @description The image ID of the node.
     *
     * @example m-2oqiu973jwcxe****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The node ID.
     *
     * @example rc-u79597n5f54s5bnz****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The node role. Valid values:
     *
     *   **Master**: master node
     *   **Worker**: worker node
     *
     * @example Master
     *
     * @var string
     */
    public $instanceRole;

    /**
     * @description The IP address.
     *
     * @var string[]
     */
    public $ipAddresses;

    /**
     * @description Indicates whether the node is provided by Alibaba Cloud. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $isAliyunNode;

    /**
     * @description The node name, which is the identifier of the RDS Custom node in the cluster.
     *
     * @example cn-hangzhou.192.168.XXX.XXX
     *
     * @var string
     */
    public $nodeName;

    /**
     * @description The node pool ID.
     *
     * @example None
     *
     * @var string
     */
    public $nodePoolId;

    /**
     * @description Indicates whether the node is ready. Valid values:
     *
     *   **Ready**: The node is ready.
     *   **NotReady**: The node is not ready.
     *   **Unknown**: The status of the node is unknown.
     *   **Offline**: The node is offline.
     *
     * @example Ready
     *
     * @var string
     */
    public $nodeStatus;

    /**
     * @description The runtime of the ACK cluster.
     *
     * @example 2024-10-21T07:20:09Z
     *
     * @var string
     */
    public $runtimeVersion;

    /**
     * @description The node status. Valid values:
     *
     *   **pending**
     *   **running**
     *   **starting**
     *   **stopping**
     *   **stopped**
     *
     * @example running
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'creationTime'   => 'CreationTime',
        'dockerVersion'  => 'DockerVersion',
        'imageId'        => 'ImageId',
        'instanceId'     => 'InstanceId',
        'instanceRole'   => 'InstanceRole',
        'ipAddresses'    => 'IpAddresses',
        'isAliyunNode'   => 'IsAliyunNode',
        'nodeName'       => 'NodeName',
        'nodePoolId'     => 'NodePoolId',
        'nodeStatus'     => 'NodeStatus',
        'runtimeVersion' => 'RuntimeVersion',
        'state'          => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->dockerVersion) {
            $res['DockerVersion'] = $this->dockerVersion;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceRole) {
            $res['InstanceRole'] = $this->instanceRole;
        }
        if (null !== $this->ipAddresses) {
            $res['IpAddresses'] = $this->ipAddresses;
        }
        if (null !== $this->isAliyunNode) {
            $res['IsAliyunNode'] = $this->isAliyunNode;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->nodePoolId) {
            $res['NodePoolId'] = $this->nodePoolId;
        }
        if (null !== $this->nodeStatus) {
            $res['NodeStatus'] = $this->nodeStatus;
        }
        if (null !== $this->runtimeVersion) {
            $res['RuntimeVersion'] = $this->runtimeVersion;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['DockerVersion'])) {
            $model->dockerVersion = $map['DockerVersion'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceRole'])) {
            $model->instanceRole = $map['InstanceRole'];
        }
        if (isset($map['IpAddresses'])) {
            if (!empty($map['IpAddresses'])) {
                $model->ipAddresses = $map['IpAddresses'];
            }
        }
        if (isset($map['IsAliyunNode'])) {
            $model->isAliyunNode = $map['IsAliyunNode'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['NodePoolId'])) {
            $model->nodePoolId = $map['NodePoolId'];
        }
        if (isset($map['NodeStatus'])) {
            $model->nodeStatus = $map['NodeStatus'];
        }
        if (isset($map['RuntimeVersion'])) {
            $model->runtimeVersion = $map['RuntimeVersion'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
