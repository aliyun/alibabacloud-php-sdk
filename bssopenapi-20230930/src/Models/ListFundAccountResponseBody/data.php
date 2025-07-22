<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\ListFundAccountResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2024-12-30 12:00:00
     *
     * @var string
     */
    public $createDate;

    /**
     * @example 1232121
     *
     * @var string
     */
    public $fundAccountAdminAccountId;

    /**
     * @example 云某的账户
     *
     * @var string
     */
    public $fundAccountAdminAccountName;

    /**
     * @example 1022231
     *
     * @var string
     */
    public $fundAccountId;

    /**
     * @example 云某的账户
     *
     * @var string
     */
    public $fundAccountName;

    /**
     * @example 132123211
     *
     * @var string
     */
    public $fundAccountOwnerAccountId;

    /**
     * @example VALID
     *
     * @var string
     */
    public $fundAccountStatus;

    /**
     * @example DIRECT_USER
     *
     * @var string
     */
    public $fundAccountType;

    /**
     * @example 2684210001
     *
     * @var string
     */
    public $nbid;

    /**
     * @var string[]
     */
    public $permissions;

    /**
     * @example 26842
     *
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

    public function validate() {}

    public function toMap()
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
            $res['Permissions'] = $this->permissions;
        }
        if (null !== $this->site) {
            $res['Site'] = $this->site;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
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
                $model->permissions = $map['Permissions'];
            }
        }
        if (isset($map['Site'])) {
            $model->site = $map['Site'];
        }

        return $model;
    }
}
