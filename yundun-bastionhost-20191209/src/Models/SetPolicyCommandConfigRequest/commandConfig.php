<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\SetPolicyCommandConfigRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\SetPolicyCommandConfigRequest\commandConfig\approval;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\SetPolicyCommandConfigRequest\commandConfig\deny;

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
        'deny' => 'Deny',
    ];

    public function validate()
    {
        if (null !== $this->approval) {
            $this->approval->validate();
        }
        if (null !== $this->deny) {
            $this->deny->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->approval) {
            $res['Approval'] = null !== $this->approval ? $this->approval->toArray($noStream) : $this->approval;
        }

        if (null !== $this->deny) {
            $res['Deny'] = null !== $this->deny ? $this->deny->toArray($noStream) : $this->deny;
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
        if (isset($map['Approval'])) {
            $model->approval = approval::fromMap($map['Approval']);
        }

        if (isset($map['Deny'])) {
            $model->deny = deny::fromMap($map['Deny']);
        }

        return $model;
    }
}
