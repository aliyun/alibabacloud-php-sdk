<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecsworkbench\V20220220\Models;

use AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\LoginInstanceRequest\instanceLoginInfo;
use AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\LoginInstanceRequest\partnerInfo;
use AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\LoginInstanceRequest\userAccount;
use AlibabaCloud\Tea\Model;

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
        'partnerInfo'       => 'PartnerInfo',
        'userAccount'       => 'UserAccount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceLoginInfo) {
            $res['InstanceLoginInfo'] = null !== $this->instanceLoginInfo ? $this->instanceLoginInfo->toMap() : null;
        }
        if (null !== $this->partnerInfo) {
            $res['PartnerInfo'] = null !== $this->partnerInfo ? $this->partnerInfo->toMap() : null;
        }
        if (null !== $this->userAccount) {
            $res['UserAccount'] = null !== $this->userAccount ? $this->userAccount->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LoginInstanceRequest
     */
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
