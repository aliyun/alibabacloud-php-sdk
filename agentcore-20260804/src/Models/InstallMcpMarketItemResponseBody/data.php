<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\InstallMcpMarketItemResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\InstallMcpMarketItemResponseBody\data\deploymentConfig;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\InstallMcpMarketItemResponseBody\data\marketSource;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\InstallMcpMarketItemResponseBody\data\template;

class data extends Model
{
    /**
     * @var string[]
     */
    public $addresses;

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
     * @var template
     */
    public $template;

    /**
     * @var string
     */
    public $type;

    /**
     * @var bool
     */
    public $usageActive;
    protected $_name = [
        'addresses' => 'addresses',
        'customTags' => 'customTags',
        'deploymentConfig' => 'deploymentConfig',
        'description' => 'description',
        'endpoint' => 'endpoint',
        'functionName' => 'functionName',
        'marketSource' => 'marketSource',
        'mcpServerId' => 'mcpServerId',
        'name' => 'name',
        'officialTag' => 'officialTag',
        'protocol' => 'protocol',
        'status' => 'status',
        'statusReason' => 'statusReason',
        'template' => 'template',
        'type' => 'type',
        'usageActive' => 'usageActive',
    ];

    public function validate()
    {
        if (\is_array($this->addresses)) {
            Model::validateArray($this->addresses);
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

        if (null !== $this->mcpServerId) {
            $res['mcpServerId'] = $this->mcpServerId;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->officialTag) {
            $res['officialTag'] = $this->officialTag;
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

        if (null !== $this->template) {
            $res['template'] = null !== $this->template ? $this->template->toArray($noStream) : $this->template;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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

        if (isset($map['mcpServerId'])) {
            $model->mcpServerId = $map['mcpServerId'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['officialTag'])) {
            $model->officialTag = $map['officialTag'];
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

        if (isset($map['template'])) {
            $model->template = template::fromMap($map['template']);
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['usageActive'])) {
            $model->usageActive = $map['usageActive'];
        }

        return $model;
    }
}
