<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeLayer4RulesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeLayer4RulesResponseBody\listeners\usTimeout;

class listeners extends Model
{
    /**
     * @var int
     */
    public $backendPort;

    /**
     * @var int
     */
    public $bakMode;

    /**
     * @var int
     */
    public $currentIndex;

    /**
     * @var string
     */
    public $eip;

    /**
     * @var int
     */
    public $frontendPort;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $isAutoCreate;

    /**
     * @var int
     */
    public $payloadRuleEnable;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var int
     */
    public $proxyEnable;

    /**
     * @var string
     */
    public $proxyStatus;

    /**
     * @var string[]
     */
    public $realServers;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var usTimeout
     */
    public $usTimeout;
    protected $_name = [
        'backendPort' => 'BackendPort',
        'bakMode' => 'BakMode',
        'currentIndex' => 'CurrentIndex',
        'eip' => 'Eip',
        'frontendPort' => 'FrontendPort',
        'instanceId' => 'InstanceId',
        'isAutoCreate' => 'IsAutoCreate',
        'payloadRuleEnable' => 'PayloadRuleEnable',
        'protocol' => 'Protocol',
        'proxyEnable' => 'ProxyEnable',
        'proxyStatus' => 'ProxyStatus',
        'realServers' => 'RealServers',
        'remark' => 'Remark',
        'usTimeout' => 'UsTimeout',
    ];

    public function validate()
    {
        if (\is_array($this->realServers)) {
            Model::validateArray($this->realServers);
        }
        if (null !== $this->usTimeout) {
            $this->usTimeout->validate();
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

        if (null !== $this->eip) {
            $res['Eip'] = $this->eip;
        }

        if (null !== $this->frontendPort) {
            $res['FrontendPort'] = $this->frontendPort;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->isAutoCreate) {
            $res['IsAutoCreate'] = $this->isAutoCreate;
        }

        if (null !== $this->payloadRuleEnable) {
            $res['PayloadRuleEnable'] = $this->payloadRuleEnable;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        if (null !== $this->proxyEnable) {
            $res['ProxyEnable'] = $this->proxyEnable;
        }

        if (null !== $this->proxyStatus) {
            $res['ProxyStatus'] = $this->proxyStatus;
        }

        if (null !== $this->realServers) {
            if (\is_array($this->realServers)) {
                $res['RealServers'] = [];
                $n1 = 0;
                foreach ($this->realServers as $item1) {
                    $res['RealServers'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->usTimeout) {
            $res['UsTimeout'] = null !== $this->usTimeout ? $this->usTimeout->toArray($noStream) : $this->usTimeout;
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

        if (isset($map['Eip'])) {
            $model->eip = $map['Eip'];
        }

        if (isset($map['FrontendPort'])) {
            $model->frontendPort = $map['FrontendPort'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['IsAutoCreate'])) {
            $model->isAutoCreate = $map['IsAutoCreate'];
        }

        if (isset($map['PayloadRuleEnable'])) {
            $model->payloadRuleEnable = $map['PayloadRuleEnable'];
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        if (isset($map['ProxyEnable'])) {
            $model->proxyEnable = $map['ProxyEnable'];
        }

        if (isset($map['ProxyStatus'])) {
            $model->proxyStatus = $map['ProxyStatus'];
        }

        if (isset($map['RealServers'])) {
            if (!empty($map['RealServers'])) {
                $model->realServers = [];
                $n1 = 0;
                foreach ($map['RealServers'] as $item1) {
                    $model->realServers[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['UsTimeout'])) {
            $model->usTimeout = usTimeout::fromMap($map['UsTimeout']);
        }

        return $model;
    }
}
