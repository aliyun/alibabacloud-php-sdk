<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecsworkbench\V20220220\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\LoginInstanceRequest\instanceLoginInfo;
use AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\LoginInstanceRequest\partnerInfo;
use AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\LoginInstanceRequest\userAccount;

class LoginInstanceRequest extends Model
{
    /**
     * @var instanceLoginInfo
     */
    public $instanceLoginInfo;

    /**
     * @var partnerInfo
     */
    public $partnerInfo;

    /**
     * @var userAccount
     */
    public $userAccount;
    protected $_name = [
        'instanceLoginInfo' => 'InstanceLoginInfo',
        'partnerInfo' => 'PartnerInfo',
        'userAccount' => 'UserAccount',
    ];

    public function validate()
    {
        if (null !== $this->instanceLoginInfo) {
            $this->instanceLoginInfo->validate();
        }
        if (null !== $this->partnerInfo) {
            $this->partnerInfo->validate();
        }
        if (null !== $this->userAccount) {
            $this->userAccount->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceLoginInfo) {
            $res['InstanceLoginInfo'] = null !== $this->instanceLoginInfo ? $this->instanceLoginInfo->toArray($noStream) : $this->instanceLoginInfo;
        }

        if (null !== $this->partnerInfo) {
            $res['PartnerInfo'] = null !== $this->partnerInfo ? $this->partnerInfo->toArray($noStream) : $this->partnerInfo;
        }

        if (null !== $this->userAccount) {
            $res['UserAccount'] = null !== $this->userAccount ? $this->userAccount->toArray($noStream) : $this->userAccount;
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
        if (isset($map['InstanceLoginInfo'])) {
            $model->instanceLoginInfo = instanceLoginInfo::fromMap($map['InstanceLoginInfo']);
        }

        if (isset($map['PartnerInfo'])) {
            $model->partnerInfo = partnerInfo::fromMap($map['PartnerInfo']);
        }

        if (isset($map['UserAccount'])) {
            $model->userAccount = userAccount::fromMap($map['UserAccount']);
        }

        return $model;
    }
}
