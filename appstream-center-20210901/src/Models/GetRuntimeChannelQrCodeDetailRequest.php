<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class GetRuntimeChannelQrCodeDetailRequest extends Model
{
    /**
     * @var string
     */
    public $agentPlatform;

    /**
     * @var string
     */
    public $agentProvider;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $runtimeId;

    /**
     * @var string
     */
    public $runtimeType;
    protected $_name = [
        'agentPlatform' => 'AgentPlatform',
        'agentProvider' => 'AgentProvider',
        'code' => 'Code',
        'runtimeId' => 'RuntimeId',
        'runtimeType' => 'RuntimeType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentPlatform) {
            $res['AgentPlatform'] = $this->agentPlatform;
        }

        if (null !== $this->agentProvider) {
            $res['AgentProvider'] = $this->agentProvider;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->runtimeId) {
            $res['RuntimeId'] = $this->runtimeId;
        }

        if (null !== $this->runtimeType) {
            $res['RuntimeType'] = $this->runtimeType;
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
        if (isset($map['AgentPlatform'])) {
            $model->agentPlatform = $map['AgentPlatform'];
        }

        if (isset($map['AgentProvider'])) {
            $model->agentProvider = $map['AgentProvider'];
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['RuntimeId'])) {
            $model->runtimeId = $map['RuntimeId'];
        }

        if (isset($map['RuntimeType'])) {
            $model->runtimeType = $map['RuntimeType'];
        }

        return $model;
    }
}
