<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetUserInfoResponseBody\tenantList;

class GetUserInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $avatar;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $crmType;

    /**
     * @var bool
     */
    public $isAdmin;

    /**
     * @var bool
     */
    public $isSystemTenant;

    /**
     * @var string
     */
    public $languagePreference;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $offering;

    /**
     * @var string
     */
    public $parsedOffering;

    /**
     * @var string
     */
    public $profileRole;

    /**
     * @var string
     */
    public $profileRoleInfo;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $selfIntroduction;

    /**
     * @var int
     */
    public $tenantId;

    /**
     * @var tenantList[]
     */
    public $tenantList;

    /**
     * @var string
     */
    public $tenantName;

    /**
     * @var string
     */
    public $tenantType;

    /**
     * @var string
     */
    public $userCode;

    /**
     * @var int
     */
    public $userId;
    protected $_name = [
        'avatar' => 'avatar',
        'code' => 'code',
        'crmType' => 'crmType',
        'isAdmin' => 'isAdmin',
        'isSystemTenant' => 'isSystemTenant',
        'languagePreference' => 'languagePreference',
        'message' => 'message',
        'name' => 'name',
        'offering' => 'offering',
        'parsedOffering' => 'parsedOffering',
        'profileRole' => 'profileRole',
        'profileRoleInfo' => 'profileRoleInfo',
        'requestId' => 'requestId',
        'selfIntroduction' => 'selfIntroduction',
        'tenantId' => 'tenantId',
        'tenantList' => 'tenantList',
        'tenantName' => 'tenantName',
        'tenantType' => 'tenantType',
        'userCode' => 'userCode',
        'userId' => 'userId',
    ];

    public function validate()
    {
        if (\is_array($this->tenantList)) {
            Model::validateArray($this->tenantList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->avatar) {
            $res['avatar'] = $this->avatar;
        }

        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->crmType) {
            $res['crmType'] = $this->crmType;
        }

        if (null !== $this->isAdmin) {
            $res['isAdmin'] = $this->isAdmin;
        }

        if (null !== $this->isSystemTenant) {
            $res['isSystemTenant'] = $this->isSystemTenant;
        }

        if (null !== $this->languagePreference) {
            $res['languagePreference'] = $this->languagePreference;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->offering) {
            $res['offering'] = $this->offering;
        }

        if (null !== $this->parsedOffering) {
            $res['parsedOffering'] = $this->parsedOffering;
        }

        if (null !== $this->profileRole) {
            $res['profileRole'] = $this->profileRole;
        }

        if (null !== $this->profileRoleInfo) {
            $res['profileRoleInfo'] = $this->profileRoleInfo;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->selfIntroduction) {
            $res['selfIntroduction'] = $this->selfIntroduction;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        if (null !== $this->tenantList) {
            if (\is_array($this->tenantList)) {
                $res['tenantList'] = [];
                $n1 = 0;
                foreach ($this->tenantList as $item1) {
                    $res['tenantList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tenantName) {
            $res['tenantName'] = $this->tenantName;
        }

        if (null !== $this->tenantType) {
            $res['tenantType'] = $this->tenantType;
        }

        if (null !== $this->userCode) {
            $res['userCode'] = $this->userCode;
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
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
        if (isset($map['avatar'])) {
            $model->avatar = $map['avatar'];
        }

        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['crmType'])) {
            $model->crmType = $map['crmType'];
        }

        if (isset($map['isAdmin'])) {
            $model->isAdmin = $map['isAdmin'];
        }

        if (isset($map['isSystemTenant'])) {
            $model->isSystemTenant = $map['isSystemTenant'];
        }

        if (isset($map['languagePreference'])) {
            $model->languagePreference = $map['languagePreference'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['offering'])) {
            $model->offering = $map['offering'];
        }

        if (isset($map['parsedOffering'])) {
            $model->parsedOffering = $map['parsedOffering'];
        }

        if (isset($map['profileRole'])) {
            $model->profileRole = $map['profileRole'];
        }

        if (isset($map['profileRoleInfo'])) {
            $model->profileRoleInfo = $map['profileRoleInfo'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['selfIntroduction'])) {
            $model->selfIntroduction = $map['selfIntroduction'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        if (isset($map['tenantList'])) {
            if (!empty($map['tenantList'])) {
                $model->tenantList = [];
                $n1 = 0;
                foreach ($map['tenantList'] as $item1) {
                    $model->tenantList[$n1] = tenantList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['tenantName'])) {
            $model->tenantName = $map['tenantName'];
        }

        if (isset($map['tenantType'])) {
            $model->tenantType = $map['tenantType'];
        }

        if (isset($map['userCode'])) {
            $model->userCode = $map['userCode'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
