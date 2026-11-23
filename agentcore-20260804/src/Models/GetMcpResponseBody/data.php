<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\GetMcpResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetMcpResponseBody\data\auth;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetMcpResponseBody\data\deploymentConfig;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetMcpResponseBody\data\marketSource;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetMcpResponseBody\data\operation;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetMcpResponseBody\data\originProbe;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetMcpResponseBody\data\template;

class data extends Model
{
    /**
     * @var string[]
     */
    public $addresses;

    /**
     * @var auth
     */
    public $auth;

    /**
     * @var string
     */
    public $backendMcpProtocol;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string[]
     */
    public $customTags;

    /**
     * @var deploymentConfig
     */
    public $deploymentConfig;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $functionName;

    /**
     * @var marketSource
     */
    public $marketSource;

    /**
     * @var string
     */
    public $mcpServerConfig;

    /**
     * @var string
     */
    public $mcpServerId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $officialTag;

    /**
     * @var operation
     */
    public $operation;

    /**
     * @var originProbe
     */
    public $originProbe;

    /**
     * @var string
     */
    public $originProtocolVersion;

    /**
     * @var string
     */
    public $permissionMode;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusReason;

    /**
     * @var string
     */
    public $swaggerConfig;

    /**
     * @var template
     */
    public $template;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $url;

    /**
     * @var bool
     */
    public $usageActive;
    protected $_name = [
        'addresses' => 'addresses',
        'auth' => 'auth',
        'backendMcpProtocol' => 'backendMcpProtocol',
        'createdAt' => 'createdAt',
        'customTags' => 'customTags',
        'deploymentConfig' => 'deploymentConfig',
        'description' => 'description',
        'endpoint' => 'endpoint',
        'functionName' => 'functionName',
        'marketSource' => 'marketSource',
        'mcpServerConfig' => 'mcpServerConfig',
        'mcpServerId' => 'mcpServerId',
        'name' => 'name',
        'officialTag' => 'officialTag',
        'operation' => 'operation',
        'originProbe' => 'originProbe',
        'originProtocolVersion' => 'originProtocolVersion',
        'permissionMode' => 'permissionMode',
        'protocol' => 'protocol',
        'status' => 'status',
        'statusReason' => 'statusReason',
        'swaggerConfig' => 'swaggerConfig',
        'template' => 'template',
        'type' => 'type',
        'updatedAt' => 'updatedAt',
        'url' => 'url',
        'usageActive' => 'usageActive',
    ];

    public function validate()
    {
        if (\is_array($this->addresses)) {
            Model::validateArray($this->addresses);
        }
        if (null !== $this->auth) {
            $this->auth->validate();
        }
        if (\is_array($this->customTags)) {
            Model::validateArray($this->customTags);
        }
        if (null !== $this->deploymentConfig) {
            $this->deploymentConfig->validate();
        }
        if (null !== $this->marketSource) {
            $this->marketSource->validate();
        }
        if (null !== $this->operation) {
            $this->operation->validate();
        }
        if (null !== $this->originProbe) {
            $this->originProbe->validate();
        }
        if (null !== $this->template) {
            $this->template->validate();
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

        if (null !== $this->auth) {
            $res['auth'] = null !== $this->auth ? $this->auth->toArray($noStream) : $this->auth;
        }

        if (null !== $this->backendMcpProtocol) {
            $res['backendMcpProtocol'] = $this->backendMcpProtocol;
        }

        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->customTags) {
            if (\is_array($this->customTags)) {
                $res['customTags'] = [];
                $n1 = 0;
                foreach ($this->customTags as $item1) {
                    $res['customTags'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->deploymentConfig) {
            $res['deploymentConfig'] = null !== $this->deploymentConfig ? $this->deploymentConfig->toArray($noStream) : $this->deploymentConfig;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->endpoint) {
            $res['endpoint'] = $this->endpoint;
        }

        if (null !== $this->functionName) {
            $res['functionName'] = $this->functionName;
        }

        if (null !== $this->marketSource) {
            $res['marketSource'] = null !== $this->marketSource ? $this->marketSource->toArray($noStream) : $this->marketSource;
        }

        if (null !== $this->mcpServerConfig) {
            $res['mcpServerConfig'] = $this->mcpServerConfig;
        }

        if (null !== $this->mcpServerId) {
            $res['mcpServerId'] = $this->mcpServerId;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->officialTag) {
            $res['officialTag'] = $this->officialTag;
        }

        if (null !== $this->operation) {
            $res['operation'] = null !== $this->operation ? $this->operation->toArray($noStream) : $this->operation;
        }

        if (null !== $this->originProbe) {
            $res['originProbe'] = null !== $this->originProbe ? $this->originProbe->toArray($noStream) : $this->originProbe;
        }

        if (null !== $this->originProtocolVersion) {
            $res['originProtocolVersion'] = $this->originProtocolVersion;
        }

        if (null !== $this->permissionMode) {
            $res['permissionMode'] = $this->permissionMode;
        }

        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->statusReason) {
            $res['statusReason'] = $this->statusReason;
        }

        if (null !== $this->swaggerConfig) {
            $res['swaggerConfig'] = $this->swaggerConfig;
        }

        if (null !== $this->template) {
            $res['template'] = null !== $this->template ? $this->template->toArray($noStream) : $this->template;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
        }

        if (null !== $this->url) {
            $res['url'] = $this->url;
        }

        if (null !== $this->usageActive) {
            $res['usageActive'] = $this->usageActive;
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

        if (isset($map['auth'])) {
            $model->auth = auth::fromMap($map['auth']);
        }

        if (isset($map['backendMcpProtocol'])) {
            $model->backendMcpProtocol = $map['backendMcpProtocol'];
        }

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['customTags'])) {
            if (!empty($map['customTags'])) {
                $model->customTags = [];
                $n1 = 0;
                foreach ($map['customTags'] as $item1) {
                    $model->customTags[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['deploymentConfig'])) {
            $model->deploymentConfig = deploymentConfig::fromMap($map['deploymentConfig']);
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['endpoint'])) {
            $model->endpoint = $map['endpoint'];
        }

        if (isset($map['functionName'])) {
            $model->functionName = $map['functionName'];
        }

        if (isset($map['marketSource'])) {
            $model->marketSource = marketSource::fromMap($map['marketSource']);
        }

        if (isset($map['mcpServerConfig'])) {
            $model->mcpServerConfig = $map['mcpServerConfig'];
        }

        if (isset($map['mcpServerId'])) {
            $model->mcpServerId = $map['mcpServerId'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['officialTag'])) {
            $model->officialTag = $map['officialTag'];
        }

        if (isset($map['operation'])) {
            $model->operation = operation::fromMap($map['operation']);
        }

        if (isset($map['originProbe'])) {
            $model->originProbe = originProbe::fromMap($map['originProbe']);
        }

        if (isset($map['originProtocolVersion'])) {
            $model->originProtocolVersion = $map['originProtocolVersion'];
        }

        if (isset($map['permissionMode'])) {
            $model->permissionMode = $map['permissionMode'];
        }

        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['statusReason'])) {
            $model->statusReason = $map['statusReason'];
        }

        if (isset($map['swaggerConfig'])) {
            $model->swaggerConfig = $map['swaggerConfig'];
        }

        if (isset($map['template'])) {
            $model->template = template::fromMap($map['template']);
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        if (isset($map['usageActive'])) {
            $model->usageActive = $map['usageActive'];
        }

        return $model;
    }
}
