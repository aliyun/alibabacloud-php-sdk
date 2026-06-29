<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelStudio\V20260210\Models\ListOrganizationMembersResponseBody;

use AlibabaCloud\Dara\Model;

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
    protected $_name = [
        'accountBizId' => 'AccountBizId',
        'accountId' => 'AccountId',
        'accountName' => 'AccountName',
        'apiKeyId' => 'ApiKeyId',
        'email' => 'Email',
        'gmtCreate' => 'GmtCreate',
        'maskedApiKey' => 'MaskedApiKey',
        'orgId' => 'OrgId',
        'roles' => 'Roles',
        'seatId' => 'SeatId',
        'specType' => 'SpecType',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->roles)) {
            Model::validateArray($this->roles);
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

        return $model;
    }
}
