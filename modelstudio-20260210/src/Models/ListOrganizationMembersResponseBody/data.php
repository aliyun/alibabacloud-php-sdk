<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelStudio\V20260210\Models\ListOrganizationMembersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\ListOrganizationMembersResponseBody\data\packLimitInfo;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\ListOrganizationMembersResponseBody\data\subscriptionInfo;

class data extends Model
{
    /**
     * @var string
     */
    public $accountBizId;

    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $accountName;

    /**
     * @var string
     */
    public $apiKeyId;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $maskedApiKey;

    /**
     * @var string
     */
    public $orgId;

    /**
     * @var packLimitInfo
     */
    public $packLimitInfo;

    /**
     * @var string[]
     */
    public $roles;

    /**
     * @var string
     */
    public $seatId;

    /**
     * @var string
     */
    public $specType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var subscriptionInfo
     */
    public $subscriptionInfo;
    protected $_name = [
        'accountBizId' => 'AccountBizId',
        'accountId' => 'AccountId',
        'accountName' => 'AccountName',
        'apiKeyId' => 'ApiKeyId',
        'email' => 'Email',
        'gmtCreate' => 'GmtCreate',
        'maskedApiKey' => 'MaskedApiKey',
        'orgId' => 'OrgId',
        'packLimitInfo' => 'PackLimitInfo',
        'roles' => 'Roles',
        'seatId' => 'SeatId',
        'specType' => 'SpecType',
        'status' => 'Status',
        'subscriptionInfo' => 'SubscriptionInfo',
    ];

    public function validate()
    {
        if (null !== $this->packLimitInfo) {
            $this->packLimitInfo->validate();
        }
        if (\is_array($this->roles)) {
            Model::validateArray($this->roles);
        }
        if (null !== $this->subscriptionInfo) {
            $this->subscriptionInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountBizId) {
            $res['AccountBizId'] = $this->accountBizId;
        }

        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }

        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }

        if (null !== $this->apiKeyId) {
            $res['ApiKeyId'] = $this->apiKeyId;
        }

        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->maskedApiKey) {
            $res['MaskedApiKey'] = $this->maskedApiKey;
        }

        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }

        if (null !== $this->packLimitInfo) {
            $res['PackLimitInfo'] = null !== $this->packLimitInfo ? $this->packLimitInfo->toArray($noStream) : $this->packLimitInfo;
        }

        if (null !== $this->roles) {
            if (\is_array($this->roles)) {
                $res['Roles'] = [];
                $n1 = 0;
                foreach ($this->roles as $item1) {
                    $res['Roles'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->seatId) {
            $res['SeatId'] = $this->seatId;
        }

        if (null !== $this->specType) {
            $res['SpecType'] = $this->specType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->subscriptionInfo) {
            $res['SubscriptionInfo'] = null !== $this->subscriptionInfo ? $this->subscriptionInfo->toArray($noStream) : $this->subscriptionInfo;
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
        if (isset($map['AccountBizId'])) {
            $model->accountBizId = $map['AccountBizId'];
        }

        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }

        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }

        if (isset($map['ApiKeyId'])) {
            $model->apiKeyId = $map['ApiKeyId'];
        }

        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['MaskedApiKey'])) {
            $model->maskedApiKey = $map['MaskedApiKey'];
        }

        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }

        if (isset($map['PackLimitInfo'])) {
            $model->packLimitInfo = packLimitInfo::fromMap($map['PackLimitInfo']);
        }

        if (isset($map['Roles'])) {
            if (!empty($map['Roles'])) {
                $model->roles = [];
                $n1 = 0;
                foreach ($map['Roles'] as $item1) {
                    $model->roles[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SeatId'])) {
            $model->seatId = $map['SeatId'];
        }

        if (isset($map['SpecType'])) {
            $model->specType = $map['SpecType'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SubscriptionInfo'])) {
            $model->subscriptionInfo = subscriptionInfo::fromMap($map['SubscriptionInfo']);
        }

        return $model;
    }
}
