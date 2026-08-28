<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateExternalAgentBootstrapTokenResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateExternalAgentBootstrapTokenResponseBody\data\cms;

class data extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $bootstrapToken;

    /**
     * @var cms
     */
    public $cms;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $tokenFingerprint;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'agentId' => 'agentId',
        'bootstrapToken' => 'bootstrapToken',
        'cms' => 'cms',
        'networkType' => 'networkType',
        'tokenFingerprint' => 'tokenFingerprint',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        if (null !== $this->cms) {
            $this->cms->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['agentId'] = $this->agentId;
        }

        if (null !== $this->bootstrapToken) {
            $res['bootstrapToken'] = $this->bootstrapToken;
        }

        if (null !== $this->cms) {
            $res['cms'] = null !== $this->cms ? $this->cms->toArray($noStream) : $this->cms;
        }

        if (null !== $this->networkType) {
            $res['networkType'] = $this->networkType;
        }

        if (null !== $this->tokenFingerprint) {
            $res['tokenFingerprint'] = $this->tokenFingerprint;
        }

        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
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
        if (isset($map['agentId'])) {
            $model->agentId = $map['agentId'];
        }

        if (isset($map['bootstrapToken'])) {
            $model->bootstrapToken = $map['bootstrapToken'];
        }

        if (isset($map['cms'])) {
            $model->cms = cms::fromMap($map['cms']);
        }

        if (isset($map['networkType'])) {
            $model->networkType = $map['networkType'];
        }

        if (isset($map['tokenFingerprint'])) {
            $model->tokenFingerprint = $map['tokenFingerprint'];
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
