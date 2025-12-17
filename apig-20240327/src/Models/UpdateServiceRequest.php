<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateServiceRequest\healthCheckConfig;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateServiceRequest\outlierDetectionConfig;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateServiceRequest\ports;

class UpdateServiceRequest extends Model
{
    /**
     * @var string[]
     */
    public $addresses;

    /**
     * @var AgentServiceConfig
     */
    public $agentServiceConfig;

    /**
     * @var AiServiceConfig
     */
    public $aiServiceConfig;

    /**
     * @var string[]
     */
    public $dnsServers;

    /**
     * @var healthCheckConfig
     */
    public $healthCheckConfig;

    /**
     * @var float
     */
    public $healthyPanicThreshold;

    /**
     * @var outlierDetectionConfig
     */
    public $outlierDetectionConfig;

    /**
     * @var ports[]
     */
    public $ports;

    /**
     * @var string
     */
    public $protocol;
    protected $_name = [
        'addresses' => 'addresses',
        'agentServiceConfig' => 'agentServiceConfig',
        'aiServiceConfig' => 'aiServiceConfig',
        'dnsServers' => 'dnsServers',
        'healthCheckConfig' => 'healthCheckConfig',
        'healthyPanicThreshold' => 'healthyPanicThreshold',
        'outlierDetectionConfig' => 'outlierDetectionConfig',
        'ports' => 'ports',
        'protocol' => 'protocol',
    ];

    public function validate()
    {
        if (\is_array($this->addresses)) {
            Model::validateArray($this->addresses);
        }
        if (null !== $this->agentServiceConfig) {
            $this->agentServiceConfig->validate();
        }
        if (null !== $this->aiServiceConfig) {
            $this->aiServiceConfig->validate();
        }
        if (\is_array($this->dnsServers)) {
            Model::validateArray($this->dnsServers);
        }
        if (null !== $this->healthCheckConfig) {
            $this->healthCheckConfig->validate();
        }
        if (null !== $this->outlierDetectionConfig) {
            $this->outlierDetectionConfig->validate();
        }
        if (\is_array($this->ports)) {
            Model::validateArray($this->ports);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addresses) {
            if (\is_array($this->addresses)) {
                $res['addresses'] = [];
                $n1 = 0;
                foreach ($this->addresses as $item1) {
                    $res['addresses'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->agentServiceConfig) {
            $res['agentServiceConfig'] = null !== $this->agentServiceConfig ? $this->agentServiceConfig->toArray($noStream) : $this->agentServiceConfig;
        }

        if (null !== $this->aiServiceConfig) {
            $res['aiServiceConfig'] = null !== $this->aiServiceConfig ? $this->aiServiceConfig->toArray($noStream) : $this->aiServiceConfig;
        }

        if (null !== $this->dnsServers) {
            if (\is_array($this->dnsServers)) {
                $res['dnsServers'] = [];
                $n1 = 0;
                foreach ($this->dnsServers as $item1) {
                    $res['dnsServers'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->healthCheckConfig) {
            $res['healthCheckConfig'] = null !== $this->healthCheckConfig ? $this->healthCheckConfig->toArray($noStream) : $this->healthCheckConfig;
        }

        if (null !== $this->healthyPanicThreshold) {
            $res['healthyPanicThreshold'] = $this->healthyPanicThreshold;
        }

        if (null !== $this->outlierDetectionConfig) {
            $res['outlierDetectionConfig'] = null !== $this->outlierDetectionConfig ? $this->outlierDetectionConfig->toArray($noStream) : $this->outlierDetectionConfig;
        }

        if (null !== $this->ports) {
            if (\is_array($this->ports)) {
                $res['ports'] = [];
                $n1 = 0;
                foreach ($this->ports as $item1) {
                    $res['ports'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
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
        if (isset($map['addresses'])) {
            if (!empty($map['addresses'])) {
                $model->addresses = [];
                $n1 = 0;
                foreach ($map['addresses'] as $item1) {
                    $model->addresses[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['agentServiceConfig'])) {
            $model->agentServiceConfig = AgentServiceConfig::fromMap($map['agentServiceConfig']);
        }

        if (isset($map['aiServiceConfig'])) {
            $model->aiServiceConfig = AiServiceConfig::fromMap($map['aiServiceConfig']);
        }

        if (isset($map['dnsServers'])) {
            if (!empty($map['dnsServers'])) {
                $model->dnsServers = [];
                $n1 = 0;
                foreach ($map['dnsServers'] as $item1) {
                    $model->dnsServers[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['healthCheckConfig'])) {
            $model->healthCheckConfig = healthCheckConfig::fromMap($map['healthCheckConfig']);
        }

        if (isset($map['healthyPanicThreshold'])) {
            $model->healthyPanicThreshold = $map['healthyPanicThreshold'];
        }

        if (isset($map['outlierDetectionConfig'])) {
            $model->outlierDetectionConfig = outlierDetectionConfig::fromMap($map['outlierDetectionConfig']);
        }

        if (isset($map['ports'])) {
            if (!empty($map['ports'])) {
                $model->ports = [];
                $n1 = 0;
                foreach ($map['ports'] as $item1) {
                    $model->ports[$n1] = ports::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
        }

        return $model;
    }
}
