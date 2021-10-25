<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\UniMkt\V20181212\Models\ListUserResponseBody;

use AlibabaCloud\Tea\Model;

class model extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $yunPersonsId;

    /**
     * @var string
     */
    public $sspUserId;

    /**
     * @var string
     */
    public $tenantUserId;

    /**
     * @var string
     */
    public $mobilePhone;

    /**
     * @var string
     */
    public $roleCode;

    /**
     * @var int
     */
    public $gmtModifiedTime;

    /**
     * @var int
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $yunUid;

    /**
     * @var string
     */
    public $isDeleteTag;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'status'          => 'Status',
        'yunPersonsId'    => 'YunPersonsId',
        'sspUserId'       => 'SspUserId',
        'tenantUserId'    => 'TenantUserId',
        'mobilePhone'     => 'MobilePhone',
        'roleCode'        => 'RoleCode',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'gmtCreateTime'   => 'GmtCreateTime',
        'email'           => 'Email',
        'userName'        => 'UserName',
        'yunUid'          => 'YunUid',
        'isDeleteTag'     => 'IsDeleteTag',
        'tenantId'        => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->yunPersonsId) {
            $res['YunPersonsId'] = $this->yunPersonsId;
        }
        if (null !== $this->sspUserId) {
            $res['SspUserId'] = $this->sspUserId;
        }
        if (null !== $this->tenantUserId) {
            $res['TenantUserId'] = $this->tenantUserId;
        }
        if (null !== $this->mobilePhone) {
            $res['MobilePhone'] = $this->mobilePhone;
        }
        if (null !== $this->roleCode) {
            $res['RoleCode'] = $this->roleCode;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->yunUid) {
            $res['YunUid'] = $this->yunUid;
        }
        if (null !== $this->isDeleteTag) {
            $res['IsDeleteTag'] = $this->isDeleteTag;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return model
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['YunPersonsId'])) {
            $model->yunPersonsId = $map['YunPersonsId'];
        }
        if (isset($map['SspUserId'])) {
            $model->sspUserId = $map['SspUserId'];
        }
        if (isset($map['TenantUserId'])) {
            $model->tenantUserId = $map['TenantUserId'];
        }
        if (isset($map['MobilePhone'])) {
            $model->mobilePhone = $map['MobilePhone'];
        }
        if (isset($map['RoleCode'])) {
            $model->roleCode = $map['RoleCode'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['YunUid'])) {
            $model->yunUid = $map['YunUid'];
        }
        if (isset($map['IsDeleteTag'])) {
            $model->isDeleteTag = $map['IsDeleteTag'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
