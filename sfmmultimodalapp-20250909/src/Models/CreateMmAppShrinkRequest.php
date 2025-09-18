<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models;

use AlibabaCloud\Dara\Model;

class CreateMmAppShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $bindingConfigShrink;

    /**
     * @var string
     */
    public $conversationConfigShrink;

    /**
     * @var string
     */
    public $modelConfigShrink;

    /**
     * @var string
     */
    public $prompt;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'appName' => 'AppName',
        'bindingConfigShrink' => 'BindingConfig',
        'conversationConfigShrink' => 'ConversationConfig',
        'modelConfigShrink' => 'ModelConfig',
        'prompt' => 'Prompt',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->bindingConfigShrink) {
            $res['BindingConfig'] = $this->bindingConfigShrink;
        }

        if (null !== $this->conversationConfigShrink) {
            $res['ConversationConfig'] = $this->conversationConfigShrink;
        }

        if (null !== $this->modelConfigShrink) {
            $res['ModelConfig'] = $this->modelConfigShrink;
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
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['BindingConfig'])) {
            $model->bindingConfigShrink = $map['BindingConfig'];
        }

        if (isset($map['ConversationConfig'])) {
            $model->conversationConfigShrink = $map['ConversationConfig'];
        }

        if (isset($map['ModelConfig'])) {
            $model->modelConfigShrink = $map['ModelConfig'];
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
