<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetPolicyResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetPolicyResponseBody\policy\accessTimeRangeConfig;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetPolicyResponseBody\policy\approvalConfig;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetPolicyResponseBody\policy\commandConfig;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetPolicyResponseBody\policy\IPAclConfig;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetPolicyResponseBody\policy\protocolConfig;

class policy extends Model
{
    /**
     * @var accessTimeRangeConfig
     */
    public $accessTimeRangeConfig;

    /**
     * @var approvalConfig
     */
    public $approvalConfig;

    /**
     * @var commandConfig
     */
    public $commandConfig;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var IPAclConfig
     */
    public $IPAclConfig;

    /**
     * @var string
     */
    public $policyId;

    /**
     * @var string
     */
    public $policyName;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var protocolConfig
     */
    public $protocolConfig;
    protected $_name = [
        'accessTimeRangeConfig' => 'AccessTimeRangeConfig',
        'approvalConfig' => 'ApprovalConfig',
        'commandConfig' => 'CommandConfig',
        'comment' => 'Comment',
        'IPAclConfig' => 'IPAclConfig',
        'policyId' => 'PolicyId',
        'policyName' => 'PolicyName',
        'priority' => 'Priority',
        'protocolConfig' => 'ProtocolConfig',
    ];

    public function validate()
    {
        if (null !== $this->accessTimeRangeConfig) {
            $this->accessTimeRangeConfig->validate();
        }
        if (null !== $this->approvalConfig) {
            $this->approvalConfig->validate();
        }
        if (null !== $this->commandConfig) {
            $this->commandConfig->validate();
        }
        if (null !== $this->IPAclConfig) {
            $this->IPAclConfig->validate();
        }
        if (null !== $this->protocolConfig) {
            $this->protocolConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessTimeRangeConfig) {
            $res['AccessTimeRangeConfig'] = null !== $this->accessTimeRangeConfig ? $this->accessTimeRangeConfig->toArray($noStream) : $this->accessTimeRangeConfig;
        }

        if (null !== $this->approvalConfig) {
            $res['ApprovalConfig'] = null !== $this->approvalConfig ? $this->approvalConfig->toArray($noStream) : $this->approvalConfig;
        }

        if (null !== $this->commandConfig) {
            $res['CommandConfig'] = null !== $this->commandConfig ? $this->commandConfig->toArray($noStream) : $this->commandConfig;
        }

        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->IPAclConfig) {
            $res['IPAclConfig'] = null !== $this->IPAclConfig ? $this->IPAclConfig->toArray($noStream) : $this->IPAclConfig;
        }

        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }

        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->protocolConfig) {
            $res['ProtocolConfig'] = null !== $this->protocolConfig ? $this->protocolConfig->toArray($noStream) : $this->protocolConfig;
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
        if (isset($map['AccessTimeRangeConfig'])) {
            $model->accessTimeRangeConfig = accessTimeRangeConfig::fromMap($map['AccessTimeRangeConfig']);
        }

        if (isset($map['ApprovalConfig'])) {
            $model->approvalConfig = approvalConfig::fromMap($map['ApprovalConfig']);
        }

        if (isset($map['CommandConfig'])) {
            $model->commandConfig = commandConfig::fromMap($map['CommandConfig']);
        }

        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['IPAclConfig'])) {
            $model->IPAclConfig = IPAclConfig::fromMap($map['IPAclConfig']);
        }

        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }

        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['ProtocolConfig'])) {
            $model->protocolConfig = protocolConfig::fromMap($map['ProtocolConfig']);
        }

        return $model;
    }
}
