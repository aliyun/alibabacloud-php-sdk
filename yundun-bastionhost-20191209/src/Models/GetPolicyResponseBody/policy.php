<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetPolicyResponseBody;

use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetPolicyResponseBody\policy\accessTimeRangeConfig;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetPolicyResponseBody\policy\approvalConfig;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetPolicyResponseBody\policy\commandConfig;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetPolicyResponseBody\policy\IPAclConfig;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetPolicyResponseBody\policy\protocolConfig;
use AlibabaCloud\Tea\Model;

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
     * @example comment
     *
     * @var string
     */
    public $comment;

    /**
     * @var IPAclConfig
     */
    public $IPAclConfig;

    /**
     * @example 3
     *
     * @var string
     */
    public $policyId;

    /**
     * @example test
     *
     * @var string
     */
    public $policyName;

    /**
     * @example 1
     *
     * @var int
     */
    public $priority;

    /**
     * @var protocolConfig
     */
    public $protocolConfig;
    protected $_name = [
        'accessTimeRangeConfig' => 'AccessTimeRangeConfig',
        'approvalConfig'        => 'ApprovalConfig',
        'commandConfig'         => 'CommandConfig',
        'comment'               => 'Comment',
        'IPAclConfig'           => 'IPAclConfig',
        'policyId'              => 'PolicyId',
        'policyName'            => 'PolicyName',
        'priority'              => 'Priority',
        'protocolConfig'        => 'ProtocolConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessTimeRangeConfig) {
            $res['AccessTimeRangeConfig'] = null !== $this->accessTimeRangeConfig ? $this->accessTimeRangeConfig->toMap() : null;
        }
        if (null !== $this->approvalConfig) {
            $res['ApprovalConfig'] = null !== $this->approvalConfig ? $this->approvalConfig->toMap() : null;
        }
        if (null !== $this->commandConfig) {
            $res['CommandConfig'] = null !== $this->commandConfig ? $this->commandConfig->toMap() : null;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->IPAclConfig) {
            $res['IPAclConfig'] = null !== $this->IPAclConfig ? $this->IPAclConfig->toMap() : null;
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
            $res['ProtocolConfig'] = null !== $this->protocolConfig ? $this->protocolConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return policy
     */
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
