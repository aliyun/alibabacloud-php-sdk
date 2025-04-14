<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\ListFundAccountResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $createDate;

    /**
     * @var string
     */
    public $fundAccountAdminAccountId;

    /**
     * @var string
     */
    public $fundAccountAdminAccountName;

    /**
     * @var string
     */
    public $fundAccountId;

    /**
     * @var string
     */
    public $fundAccountName;

    /**
     * @var string
     */
    public $fundAccountOwnerAccountId;

    /**
     * @var string
     */
    public $fundAccountStatus;

    /**
     * @var string
     */
    public $fundAccountType;

    /**
     * @var string
     */
    public $nbid;

    /**
     * @var string[]
     */
    public $permissions;

    /**
     * @var string
     */
    public $site;
    protected $_name = [
        'createDate' => 'CreateDate',
        'fundAccountAdminAccountId' => 'FundAccountAdminAccountId',
        'fundAccountAdminAccountName' => 'FundAccountAdminAccountName',
        'fundAccountId' => 'FundAccountId',
        'fundAccountName' => 'FundAccountName',
        'fundAccountOwnerAccountId' => 'FundAccountOwnerAccountId',
        'fundAccountStatus' => 'FundAccountStatus',
        'fundAccountType' => 'FundAccountType',
        'nbid' => 'Nbid',
        'permissions' => 'Permissions',
        'site' => 'Site',
    ];

    public function validate()
    {
        if (\is_array($this->permissions)) {
            Model::validateArray($this->permissions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }

        if (null !== $this->fundAccountAdminAccountId) {
            $res['FundAccountAdminAccountId'] = $this->fundAccountAdminAccountId;
        }

        if (null !== $this->fundAccountAdminAccountName) {
            $res['FundAccountAdminAccountName'] = $this->fundAccountAdminAccountName;
        }

        if (null !== $this->fundAccountId) {
            $res['FundAccountId'] = $this->fundAccountId;
        }

        if (null !== $this->fundAccountName) {
            $res['FundAccountName'] = $this->fundAccountName;
        }

        if (null !== $this->fundAccountOwnerAccountId) {
            $res['FundAccountOwnerAccountId'] = $this->fundAccountOwnerAccountId;
        }

        if (null !== $this->fundAccountStatus) {
            $res['FundAccountStatus'] = $this->fundAccountStatus;
        }

        if (null !== $this->fundAccountType) {
            $res['FundAccountType'] = $this->fundAccountType;
        }

        if (null !== $this->nbid) {
            $res['Nbid'] = $this->nbid;
        }

        if (null !== $this->permissions) {
            if (\is_array($this->permissions)) {
                $res['Permissions'] = [];
                $n1 = 0;
                foreach ($this->permissions as $item1) {
                    $res['Permissions'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->site) {
            $res['Site'] = $this->site;
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
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }

        if (isset($map['FundAccountAdminAccountId'])) {
            $model->fundAccountAdminAccountId = $map['FundAccountAdminAccountId'];
        }

        if (isset($map['FundAccountAdminAccountName'])) {
            $model->fundAccountAdminAccountName = $map['FundAccountAdminAccountName'];
        }

        if (isset($map['FundAccountId'])) {
            $model->fundAccountId = $map['FundAccountId'];
        }

        if (isset($map['FundAccountName'])) {
            $model->fundAccountName = $map['FundAccountName'];
        }

        if (isset($map['FundAccountOwnerAccountId'])) {
            $model->fundAccountOwnerAccountId = $map['FundAccountOwnerAccountId'];
        }

        if (isset($map['FundAccountStatus'])) {
            $model->fundAccountStatus = $map['FundAccountStatus'];
        }

        if (isset($map['FundAccountType'])) {
            $model->fundAccountType = $map['FundAccountType'];
        }

        if (isset($map['Nbid'])) {
            $model->nbid = $map['Nbid'];
        }

        if (isset($map['Permissions'])) {
            if (!empty($map['Permissions'])) {
                $model->permissions = [];
                $n1 = 0;
                foreach ($map['Permissions'] as $item1) {
                    $model->permissions[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Site'])) {
            $model->site = $map['Site'];
        }

        return $model;
    }
}
