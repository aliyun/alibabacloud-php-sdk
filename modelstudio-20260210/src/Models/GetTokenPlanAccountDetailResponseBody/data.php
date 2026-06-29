<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelStudio\V20260210\Models\GetTokenPlanAccountDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\GetTokenPlanAccountDetailResponseBody\data\orgMemberships;

class data extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $accountType;

    /**
     * @var string
     */
    public $aliyunUid;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $email;

    /**
     * @var bool
     */
    public $isDeleted;

    /**
     * @var string
     */
    public $name;

    /**
     * @var orgMemberships[]
     */
    public $orgMemberships;
    protected $_name = [
        'accountId' => 'AccountId',
        'accountType' => 'AccountType',
        'aliyunUid' => 'AliyunUid',
        'createdAt' => 'CreatedAt',
        'email' => 'Email',
        'isDeleted' => 'IsDeleted',
        'name' => 'Name',
        'orgMemberships' => 'OrgMemberships',
    ];

    public function validate()
    {
        if (\is_array($this->orgMemberships)) {
            Model::validateArray($this->orgMemberships);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }

        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }

        if (null !== $this->aliyunUid) {
            $res['AliyunUid'] = $this->aliyunUid;
        }

        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }

        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }

        if (null !== $this->isDeleted) {
            $res['IsDeleted'] = $this->isDeleted;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->orgMemberships) {
            if (\is_array($this->orgMemberships)) {
                $res['OrgMemberships'] = [];
                $n1 = 0;
                foreach ($this->orgMemberships as $item1) {
                    $res['OrgMemberships'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }

        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }

        if (isset($map['AliyunUid'])) {
            $model->aliyunUid = $map['AliyunUid'];
        }

        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }

        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }

        if (isset($map['IsDeleted'])) {
            $model->isDeleted = $map['IsDeleted'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OrgMemberships'])) {
            if (!empty($map['OrgMemberships'])) {
                $model->orgMemberships = [];
                $n1 = 0;
                foreach ($map['OrgMemberships'] as $item1) {
                    $model->orgMemberships[$n1] = orgMemberships::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
