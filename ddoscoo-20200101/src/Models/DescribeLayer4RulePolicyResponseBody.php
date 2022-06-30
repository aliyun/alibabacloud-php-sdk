<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeLayer4RulePolicyResponseBody\priRealServers;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeLayer4RulePolicyResponseBody\secRealServers;
use AlibabaCloud\Tea\Model;

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
        'backendPort'     => 'BackendPort',
        'bakMode'         => 'BakMode',
        'currentIndex'    => 'CurrentIndex',
        'forwardProtocol' => 'ForwardProtocol',
        'frontendPort'    => 'FrontendPort',
        'instanceId'      => 'InstanceId',
        'priRealServers'  => 'PriRealServers',
        'requestId'       => 'RequestId',
        'secRealServers'  => 'SecRealServers',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['PriRealServers'] = [];
            if (null !== $this->priRealServers && \is_array($this->priRealServers)) {
                $n = 0;
                foreach ($this->priRealServers as $item) {
                    $res['PriRealServers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->secRealServers) {
            $res['SecRealServers'] = [];
            if (null !== $this->secRealServers && \is_array($this->secRealServers)) {
                $n = 0;
                foreach ($this->secRealServers as $item) {
                    $res['SecRealServers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLayer4RulePolicyResponseBody
     */
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
                $n                     = 0;
                foreach ($map['PriRealServers'] as $item) {
                    $model->priRealServers[$n++] = null !== $item ? priRealServers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecRealServers'])) {
            if (!empty($map['SecRealServers'])) {
                $model->secRealServers = [];
                $n                     = 0;
                foreach ($map['SecRealServers'] as $item) {
                    $model->secRealServers[$n++] = null !== $item ? secRealServers::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
