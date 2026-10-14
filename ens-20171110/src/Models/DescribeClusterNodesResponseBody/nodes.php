<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeClusterNodesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeClusterNodesResponseBody\nodes\nodeInfo;

class nodes extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $ensRegionId;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string[]
     */
    public $ipAddress;

    /**
     * @var nodeInfo
     */
    public $nodeInfo;

    /**
     * @var string
     */
    public $nodepoolId;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $state;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'ensRegionId' => 'EnsRegionId',
        'imageId' => 'ImageId',
        'instanceId' => 'InstanceId',
        'ipAddress' => 'IpAddress',
        'nodeInfo' => 'NodeInfo',
        'nodepoolId' => 'NodepoolId',
        'payType' => 'PayType',
        'state' => 'State',
    ];

    public function validate()
    {
        if (\is_array($this->ipAddress)) {
            Model::validateArray($this->ipAddress);
        }
        if (null !== $this->nodeInfo) {
            $this->nodeInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->ipAddress) {
            if (\is_array($this->ipAddress)) {
                $res['IpAddress'] = [];
                $n1 = 0;
                foreach ($this->ipAddress as $item1) {
                    $res['IpAddress'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nodeInfo) {
            $res['NodeInfo'] = null !== $this->nodeInfo ? $this->nodeInfo->toArray($noStream) : $this->nodeInfo;
        }

        if (null !== $this->nodepoolId) {
            $res['NodepoolId'] = $this->nodepoolId;
        }

        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['IpAddress'])) {
            if (!empty($map['IpAddress'])) {
                $model->ipAddress = [];
                $n1 = 0;
                foreach ($map['IpAddress'] as $item1) {
                    $model->ipAddress[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['NodeInfo'])) {
            $model->nodeInfo = nodeInfo::fromMap($map['NodeInfo']);
        }

        if (isset($map['NodepoolId'])) {
            $model->nodepoolId = $map['NodepoolId'];
        }

        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
