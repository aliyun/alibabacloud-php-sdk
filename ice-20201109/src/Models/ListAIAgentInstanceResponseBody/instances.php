<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListAIAgentInstanceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentRuntimeConfig;
use AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentTemplateConfig;

class instances extends Model
{
    /**
     * @var string
     */
    public $callLogUrl;
    /**
     * @var AIAgentRuntimeConfig
     */
    public $runtimeConfig;
    /**
     * @var string
     */
    public $status;
    /**
     * @var AIAgentTemplateConfig
     */
    public $templateConfig;
    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'callLogUrl'     => 'CallLogUrl',
        'runtimeConfig'  => 'RuntimeConfig',
        'status'         => 'Status',
        'templateConfig' => 'TemplateConfig',
        'userData'       => 'UserData',
    ];

    public function validate()
    {
        if (null !== $this->runtimeConfig) {
            $this->runtimeConfig->validate();
        }
        if (null !== $this->templateConfig) {
            $this->templateConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callLogUrl) {
            $res['CallLogUrl'] = $this->callLogUrl;
        }

        if (null !== $this->runtimeConfig) {
            $res['RuntimeConfig'] = null !== $this->runtimeConfig ? $this->runtimeConfig->toArray($noStream) : $this->runtimeConfig;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->templateConfig) {
            $res['TemplateConfig'] = null !== $this->templateConfig ? $this->templateConfig->toArray($noStream) : $this->templateConfig;
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
        if (isset($map['CallLogUrl'])) {
            $model->callLogUrl = $map['CallLogUrl'];
        }

        if (isset($map['RuntimeConfig'])) {
            $model->runtimeConfig = AIAgentRuntimeConfig::fromMap($map['RuntimeConfig']);
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TemplateConfig'])) {
            $model->templateConfig = AIAgentTemplateConfig::fromMap($map['TemplateConfig']);
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
