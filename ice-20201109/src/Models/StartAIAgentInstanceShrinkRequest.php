<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class StartAIAgentInstanceShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $AIAgentId;
    /**
     * @var string
     */
    public $runtimeConfigShrink;
    /**
     * @var string
     */
    public $templateConfigShrink;
    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'AIAgentId'            => 'AIAgentId',
        'runtimeConfigShrink'  => 'RuntimeConfig',
        'templateConfigShrink' => 'TemplateConfig',
        'userData'             => 'UserData',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AIAgentId) {
            $res['AIAgentId'] = $this->AIAgentId;
        }

        if (null !== $this->runtimeConfigShrink) {
            $res['RuntimeConfig'] = $this->runtimeConfigShrink;
        }

        if (null !== $this->templateConfigShrink) {
            $res['TemplateConfig'] = $this->templateConfigShrink;
        }

        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
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
        if (isset($map['AIAgentId'])) {
            $model->AIAgentId = $map['AIAgentId'];
        }

        if (isset($map['RuntimeConfig'])) {
            $model->runtimeConfigShrink = $map['RuntimeConfig'];
        }

        if (isset($map['TemplateConfig'])) {
            $model->templateConfigShrink = $map['TemplateConfig'];
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
