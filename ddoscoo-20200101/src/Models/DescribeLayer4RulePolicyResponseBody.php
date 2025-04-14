<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeLayer4RulePolicyResponseBody\priRealServers;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeLayer4RulePolicyResponseBody\secRealServers;

class DescribeLayer4RulePolicyResponseBody extends Model
{
    /**
     * @var int
     */
    public $backendPort;

    /**
     * @var string
     */
    public $bakMode;

    /**
     * @var int
     */
    public $currentIndex;

    /**
     * @var string
     */
    public $forwardProtocol;

    /**
     * @var int
     */
    public $frontendPort;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var priRealServers[]
     */
    public $priRealServers;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var secRealServers[]
     */
    public $secRealServers;
    protected $_name = [
        'backendPort' => 'BackendPort',
        'bakMode' => 'BakMode',
        'currentIndex' => 'CurrentIndex',
        'forwardProtocol' => 'ForwardProtocol',
        'frontendPort' => 'FrontendPort',
        'instanceId' => 'InstanceId',
        'priRealServers' => 'PriRealServers',
        'requestId' => 'RequestId',
        'secRealServers' => 'SecRealServers',
    ];

    public function validate()
    {
        if (\is_array($this->priRealServers)) {
            Model::validateArray($this->priRealServers);
        }
        if (\is_array($this->secRealServers)) {
            Model::validateArray($this->secRealServers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backendPort) {
            $res['BackendPort'] = $this->backendPort;
        }

        if (null !== $this->bakMode) {
            $res['BakMode'] = $this->bakMode;
        }

        if (null !== $this->currentIndex) {
            $res['CurrentIndex'] = $this->currentIndex;
        }

        if (null !== $this->forwardProtocol) {
            $res['ForwardProtocol'] = $this->forwardProtocol;
        }

        if (null !== $this->frontendPort) {
            $res['FrontendPort'] = $this->frontendPort;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->priRealServers) {
            if (\is_array($this->priRealServers)) {
                $res['PriRealServers'] = [];
                $n1 = 0;
                foreach ($this->priRealServers as $item1) {
                    $res['PriRealServers'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->secRealServers) {
            if (\is_array($this->secRealServers)) {
                $res['SecRealServers'] = [];
                $n1 = 0;
                foreach ($this->secRealServers as $item1) {
                    $res['SecRealServers'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['BackendPort'])) {
            $model->backendPort = $map['BackendPort'];
        }

        if (isset($map['BakMode'])) {
            $model->bakMode = $map['BakMode'];
        }

        if (isset($map['CurrentIndex'])) {
            $model->currentIndex = $map['CurrentIndex'];
        }

        if (isset($map['ForwardProtocol'])) {
            $model->forwardProtocol = $map['ForwardProtocol'];
        }

        if (isset($map['FrontendPort'])) {
            $model->frontendPort = $map['FrontendPort'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['PriRealServers'])) {
            if (!empty($map['PriRealServers'])) {
                $model->priRealServers = [];
                $n1 = 0;
                foreach ($map['PriRealServers'] as $item1) {
                    $model->priRealServers[$n1++] = priRealServers::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SecRealServers'])) {
            if (!empty($map['SecRealServers'])) {
                $model->secRealServers = [];
                $n1 = 0;
                foreach ($map['SecRealServers'] as $item1) {
                    $model->secRealServers[$n1++] = secRealServers::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
