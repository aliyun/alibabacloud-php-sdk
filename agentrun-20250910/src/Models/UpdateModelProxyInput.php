<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class UpdateModelProxyInput extends Model
{
    /**
     * @var ArmsConfiguration
     */
    public $armsConfiguration;

    /**
     * @var string
     */
    public $credentialName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var LogConfiguration
     */
    public $logConfiguration;

    /**
     * @var NetworkConfiguration
     */
    public $networkConfiguration;

    /**
     * @var ProxyConfig
     */
    public $proxyConfig;
    protected $_name = [
        'armsConfiguration' => 'armsConfiguration',
        'credentialName' => 'credentialName',
        'description' => 'description',
        'logConfiguration' => 'logConfiguration',
        'networkConfiguration' => 'networkConfiguration',
        'proxyConfig' => 'proxyConfig',
    ];

    public function validate()
    {
        if (null !== $this->armsConfiguration) {
            $this->armsConfiguration->validate();
        }
        if (null !== $this->logConfiguration) {
            $this->logConfiguration->validate();
        }
        if (null !== $this->networkConfiguration) {
            $this->networkConfiguration->validate();
        }
        if (null !== $this->proxyConfig) {
            $this->proxyConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->armsConfiguration) {
            $res['armsConfiguration'] = null !== $this->armsConfiguration ? $this->armsConfiguration->toArray($noStream) : $this->armsConfiguration;
        }

        if (null !== $this->credentialName) {
            $res['credentialName'] = $this->credentialName;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->logConfiguration) {
            $res['logConfiguration'] = null !== $this->logConfiguration ? $this->logConfiguration->toArray($noStream) : $this->logConfiguration;
        }

        if (null !== $this->networkConfiguration) {
            $res['networkConfiguration'] = null !== $this->networkConfiguration ? $this->networkConfiguration->toArray($noStream) : $this->networkConfiguration;
        }

        if (null !== $this->proxyConfig) {
            $res['proxyConfig'] = null !== $this->proxyConfig ? $this->proxyConfig->toArray($noStream) : $this->proxyConfig;
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
        if (isset($map['armsConfiguration'])) {
            $model->armsConfiguration = ArmsConfiguration::fromMap($map['armsConfiguration']);
        }

        if (isset($map['credentialName'])) {
            $model->credentialName = $map['credentialName'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['logConfiguration'])) {
            $model->logConfiguration = LogConfiguration::fromMap($map['logConfiguration']);
        }

        if (isset($map['networkConfiguration'])) {
            $model->networkConfiguration = NetworkConfiguration::fromMap($map['networkConfiguration']);
        }

        if (isset($map['proxyConfig'])) {
            $model->proxyConfig = ProxyConfig::fromMap($map['proxyConfig']);
        }

        return $model;
    }
}
