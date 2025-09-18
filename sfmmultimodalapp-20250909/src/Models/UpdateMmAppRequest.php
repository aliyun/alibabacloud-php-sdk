<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\UpdateMmAppRequest\bindingConfig;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\UpdateMmAppRequest\conversationConfig;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\UpdateMmAppRequest\modelConfig;

class UpdateMmAppRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var bindingConfig
     */
    public $bindingConfig;

    /**
     * @var conversationConfig
     */
    public $conversationConfig;

    /**
     * @var modelConfig
     */
    public $modelConfig;

    /**
     * @var string
     */
    public $prompt;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'appId' => 'AppId',
        'appName' => 'AppName',
        'bindingConfig' => 'BindingConfig',
        'conversationConfig' => 'ConversationConfig',
        'modelConfig' => 'ModelConfig',
        'prompt' => 'Prompt',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (null !== $this->bindingConfig) {
            $this->bindingConfig->validate();
        }
        if (null !== $this->conversationConfig) {
            $this->conversationConfig->validate();
        }
        if (null !== $this->modelConfig) {
            $this->modelConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->bindingConfig) {
            $res['BindingConfig'] = null !== $this->bindingConfig ? $this->bindingConfig->toArray($noStream) : $this->bindingConfig;
        }

        if (null !== $this->conversationConfig) {
            $res['ConversationConfig'] = null !== $this->conversationConfig ? $this->conversationConfig->toArray($noStream) : $this->conversationConfig;
        }

        if (null !== $this->modelConfig) {
            $res['ModelConfig'] = null !== $this->modelConfig ? $this->modelConfig->toArray($noStream) : $this->modelConfig;
        }

        if (null !== $this->prompt) {
            $res['Prompt'] = $this->prompt;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['BindingConfig'])) {
            $model->bindingConfig = bindingConfig::fromMap($map['BindingConfig']);
        }

        if (isset($map['ConversationConfig'])) {
            $model->conversationConfig = conversationConfig::fromMap($map['ConversationConfig']);
        }

        if (isset($map['ModelConfig'])) {
            $model->modelConfig = modelConfig::fromMap($map['ModelConfig']);
        }

        if (isset($map['Prompt'])) {
            $model->prompt = $map['Prompt'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
