<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateMcpRequest\body;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateMcpRequest\body\deploymentConfig\accessControl;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateMcpRequest\body\deploymentConfig\agentIdentityConfiguration;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateMcpRequest\body\deploymentConfig\codeConfiguration;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateMcpRequest\body\deploymentConfig\containerConfiguration;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateMcpRequest\body\deploymentConfig\hookConfiguration;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateMcpRequest\body\deploymentConfig\logConfiguration;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateMcpRequest\body\deploymentConfig\mcpConfiguration;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateMcpRequest\body\deploymentConfig\nasConfiguration;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateMcpRequest\body\deploymentConfig\networkConfiguration;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateMcpRequest\body\deploymentConfig\ossMountConfiguration;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateMcpRequest\body\deploymentConfig\parameterTransformConfiguration;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateMcpRequest\body\deploymentConfig\proxyConfiguration;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateMcpRequest\body\deploymentConfig\runtimeConfiguration;

class deploymentConfig extends Model
{
    /**
     * @var accessControl
     */
    public $accessControl;

    /**
     * @var agentIdentityConfiguration
     */
    public $agentIdentityConfiguration;

    /**
     * @var string
     */
    public $artifactType;

    /**
     * @var codeConfiguration
     */
    public $codeConfiguration;

    /**
     * @var containerConfiguration
     */
    public $containerConfiguration;

    /**
     * @var hookConfiguration
     */
    public $hookConfiguration;

    /**
     * @var logConfiguration
     */
    public $logConfiguration;

    /**
     * @var mcpConfiguration
     */
    public $mcpConfiguration;

    /**
     * @var nasConfiguration
     */
    public $nasConfiguration;

    /**
     * @var networkConfiguration
     */
    public $networkConfiguration;

    /**
     * @var ossMountConfiguration
     */
    public $ossMountConfiguration;

    /**
     * @var parameterTransformConfiguration
     */
    public $parameterTransformConfiguration;

    /**
     * @var proxyConfiguration
     */
    public $proxyConfiguration;

    /**
     * @var runtimeConfiguration
     */
    public $runtimeConfiguration;
    protected $_name = [
        'accessControl' => 'accessControl',
        'agentIdentityConfiguration' => 'agentIdentityConfiguration',
        'artifactType' => 'artifactType',
        'codeConfiguration' => 'codeConfiguration',
        'containerConfiguration' => 'containerConfiguration',
        'hookConfiguration' => 'hookConfiguration',
        'logConfiguration' => 'logConfiguration',
        'mcpConfiguration' => 'mcpConfiguration',
        'nasConfiguration' => 'nasConfiguration',
        'networkConfiguration' => 'networkConfiguration',
        'ossMountConfiguration' => 'ossMountConfiguration',
        'parameterTransformConfiguration' => 'parameterTransformConfiguration',
        'proxyConfiguration' => 'proxyConfiguration',
        'runtimeConfiguration' => 'runtimeConfiguration',
    ];

    public function validate()
    {
        if (null !== $this->accessControl) {
            $this->accessControl->validate();
        }
        if (null !== $this->agentIdentityConfiguration) {
            $this->agentIdentityConfiguration->validate();
        }
        if (null !== $this->codeConfiguration) {
            $this->codeConfiguration->validate();
        }
        if (null !== $this->containerConfiguration) {
            $this->containerConfiguration->validate();
        }
        if (null !== $this->hookConfiguration) {
            $this->hookConfiguration->validate();
        }
        if (null !== $this->logConfiguration) {
            $this->logConfiguration->validate();
        }
        if (null !== $this->mcpConfiguration) {
            $this->mcpConfiguration->validate();
        }
        if (null !== $this->nasConfiguration) {
            $this->nasConfiguration->validate();
        }
        if (null !== $this->networkConfiguration) {
            $this->networkConfiguration->validate();
        }
        if (null !== $this->ossMountConfiguration) {
            $this->ossMountConfiguration->validate();
        }
        if (null !== $this->parameterTransformConfiguration) {
            $this->parameterTransformConfiguration->validate();
        }
        if (null !== $this->proxyConfiguration) {
            $this->proxyConfiguration->validate();
        }
        if (null !== $this->runtimeConfiguration) {
            $this->runtimeConfiguration->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessControl) {
            $res['accessControl'] = null !== $this->accessControl ? $this->accessControl->toArray($noStream) : $this->accessControl;
        }

        if (null !== $this->agentIdentityConfiguration) {
            $res['agentIdentityConfiguration'] = null !== $this->agentIdentityConfiguration ? $this->agentIdentityConfiguration->toArray($noStream) : $this->agentIdentityConfiguration;
        }

        if (null !== $this->artifactType) {
            $res['artifactType'] = $this->artifactType;
        }

        if (null !== $this->codeConfiguration) {
            $res['codeConfiguration'] = null !== $this->codeConfiguration ? $this->codeConfiguration->toArray($noStream) : $this->codeConfiguration;
        }

        if (null !== $this->containerConfiguration) {
            $res['containerConfiguration'] = null !== $this->containerConfiguration ? $this->containerConfiguration->toArray($noStream) : $this->containerConfiguration;
        }

        if (null !== $this->hookConfiguration) {
            $res['hookConfiguration'] = null !== $this->hookConfiguration ? $this->hookConfiguration->toArray($noStream) : $this->hookConfiguration;
        }

        if (null !== $this->logConfiguration) {
            $res['logConfiguration'] = null !== $this->logConfiguration ? $this->logConfiguration->toArray($noStream) : $this->logConfiguration;
        }

        if (null !== $this->mcpConfiguration) {
            $res['mcpConfiguration'] = null !== $this->mcpConfiguration ? $this->mcpConfiguration->toArray($noStream) : $this->mcpConfiguration;
        }

        if (null !== $this->nasConfiguration) {
            $res['nasConfiguration'] = null !== $this->nasConfiguration ? $this->nasConfiguration->toArray($noStream) : $this->nasConfiguration;
        }

        if (null !== $this->networkConfiguration) {
            $res['networkConfiguration'] = null !== $this->networkConfiguration ? $this->networkConfiguration->toArray($noStream) : $this->networkConfiguration;
        }

        if (null !== $this->ossMountConfiguration) {
            $res['ossMountConfiguration'] = null !== $this->ossMountConfiguration ? $this->ossMountConfiguration->toArray($noStream) : $this->ossMountConfiguration;
        }

        if (null !== $this->parameterTransformConfiguration) {
            $res['parameterTransformConfiguration'] = null !== $this->parameterTransformConfiguration ? $this->parameterTransformConfiguration->toArray($noStream) : $this->parameterTransformConfiguration;
        }

        if (null !== $this->proxyConfiguration) {
            $res['proxyConfiguration'] = null !== $this->proxyConfiguration ? $this->proxyConfiguration->toArray($noStream) : $this->proxyConfiguration;
        }

        if (null !== $this->runtimeConfiguration) {
            $res['runtimeConfiguration'] = null !== $this->runtimeConfiguration ? $this->runtimeConfiguration->toArray($noStream) : $this->runtimeConfiguration;
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
        if (isset($map['accessControl'])) {
            $model->accessControl = accessControl::fromMap($map['accessControl']);
        }

        if (isset($map['agentIdentityConfiguration'])) {
            $model->agentIdentityConfiguration = agentIdentityConfiguration::fromMap($map['agentIdentityConfiguration']);
        }

        if (isset($map['artifactType'])) {
            $model->artifactType = $map['artifactType'];
        }

        if (isset($map['codeConfiguration'])) {
            $model->codeConfiguration = codeConfiguration::fromMap($map['codeConfiguration']);
        }

        if (isset($map['containerConfiguration'])) {
            $model->containerConfiguration = containerConfiguration::fromMap($map['containerConfiguration']);
        }

        if (isset($map['hookConfiguration'])) {
            $model->hookConfiguration = hookConfiguration::fromMap($map['hookConfiguration']);
        }

        if (isset($map['logConfiguration'])) {
            $model->logConfiguration = logConfiguration::fromMap($map['logConfiguration']);
        }

        if (isset($map['mcpConfiguration'])) {
            $model->mcpConfiguration = mcpConfiguration::fromMap($map['mcpConfiguration']);
        }

        if (isset($map['nasConfiguration'])) {
            $model->nasConfiguration = nasConfiguration::fromMap($map['nasConfiguration']);
        }

        if (isset($map['networkConfiguration'])) {
            $model->networkConfiguration = networkConfiguration::fromMap($map['networkConfiguration']);
        }

        if (isset($map['ossMountConfiguration'])) {
            $model->ossMountConfiguration = ossMountConfiguration::fromMap($map['ossMountConfiguration']);
        }

        if (isset($map['parameterTransformConfiguration'])) {
            $model->parameterTransformConfiguration = parameterTransformConfiguration::fromMap($map['parameterTransformConfiguration']);
        }

        if (isset($map['proxyConfiguration'])) {
            $model->proxyConfiguration = proxyConfiguration::fromMap($map['proxyConfiguration']);
        }

        if (isset($map['runtimeConfiguration'])) {
            $model->runtimeConfiguration = runtimeConfiguration::fromMap($map['runtimeConfiguration']);
        }

        return $model;
    }
}
