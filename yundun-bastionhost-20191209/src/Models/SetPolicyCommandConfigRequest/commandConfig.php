<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\SetPolicyCommandConfigRequest;

use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\SetPolicyCommandConfigRequest\commandConfig\approval;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\SetPolicyCommandConfigRequest\commandConfig\deny;
use AlibabaCloud\Tea\Model;

class commandConfig extends Model
{
    /**
     * @description The command approval settings.
     *
     * > A command approval policy is used to approve the commands that are excluded from a whitelist or blacklist specified in a command control policy. The command control policy takes precedence over the command approval policy in validation.
     * @var approval
     */
    public $approval;

    /**
     * @description The command control settings.
     *
     * This parameter is required.
     * @var deny
     */
    public $deny;
    protected $_name = [
        'approval' => 'Approval',
        'deny'     => 'Deny',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->approval) {
            $res['Approval'] = null !== $this->approval ? $this->approval->toMap() : null;
        }
        if (null !== $this->deny) {
            $res['Deny'] = null !== $this->deny ? $this->deny->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return commandConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Approval'])) {
            $model->approval = approval::fromMap($map['Approval']);
        }
        if (isset($map['Deny'])) {
            $model->deny = deny::fromMap($map['Deny']);
        }

        return $model;
    }
}
