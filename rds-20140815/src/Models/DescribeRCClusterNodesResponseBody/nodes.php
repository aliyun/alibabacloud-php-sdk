<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCClusterNodesResponseBody;

use AlibabaCloud\Dara\Model;

class nodes extends Model
{
    /**
     * @var string
     */
    public $creationTime;
    /**
     * @var string
     */
    public $dockerVersion;
    /**
     * @var string
     */
    public $imageId;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $instanceRole;
    /**
     * @var string[]
     */
    public $ipAddresses;
    /**
     * @var bool
     */
    public $isAliyunNode;
    /**
     * @var string
     */
    public $nodeName;
    /**
     * @var string
     */
    public $nodePoolId;
    /**
     * @var string
     */
    public $nodeStatus;
    /**
     * @var string
     */
    public $runtimeVersion;
    /**
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
        if (\is_array($this->ipAddresses)) {
            Model::validateArray($this->ipAddresses);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->ipAddresses)) {
                $res['IpAddresses'] = [];
                $n1                 = 0;
                foreach ($this->ipAddresses as $item1) {
                    $res['IpAddresses'][$n1++] = $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->ipAddresses = [];
                $n1                 = 0;
                foreach ($map['IpAddresses'] as $item1) {
                    $model->ipAddresses[$n1++] = $item1;
                }
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
