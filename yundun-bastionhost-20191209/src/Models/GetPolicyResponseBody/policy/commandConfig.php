<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetPolicyResponseBody\policy;

use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetPolicyResponseBody\policy\commandConfig\approval;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetPolicyResponseBody\policy\commandConfig\deny;
use AlibabaCloud\Tea\Model;

class commandConfig extends Model
{
    /**
     * @var approval
     */
    public $approval;

    /**
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
