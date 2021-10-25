<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\UniMkt\V20181212\Models\CreateTenantUserResponseBody;

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
    public $settleInfo;

    /**
     * @var string
     */
    public $originSiteUserId;

    /**
     * @var string
     */
    public $originSiteUserName;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $tenantName;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $business;

    /**
     * @var string
     */
    public $extInfo;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $originSite;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var int
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'status'             => 'Status',
        'settleInfo'         => 'SettleInfo',
        'originSiteUserId'   => 'OriginSiteUserId',
        'originSiteUserName' => 'OriginSiteUserName',
        'createTime'         => 'CreateTime',
        'tenantName'         => 'TenantName',
        'userId'             => 'UserId',
        'business'           => 'Business',
        'extInfo'            => 'ExtInfo',
        'version'            => 'Version',
        'originSite'         => 'OriginSite',
        'userName'           => 'UserName',
        'modifyTime'         => 'ModifyTime',
        'tenantId'           => 'TenantId',
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
        if (null !== $this->settleInfo) {
            $res['SettleInfo'] = $this->settleInfo;
        }
        if (null !== $this->originSiteUserId) {
            $res['OriginSiteUserId'] = $this->originSiteUserId;
        }
        if (null !== $this->originSiteUserName) {
            $res['OriginSiteUserName'] = $this->originSiteUserName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->tenantName) {
            $res['TenantName'] = $this->tenantName;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->business) {
            $res['Business'] = $this->business;
        }
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->originSite) {
            $res['OriginSite'] = $this->originSite;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
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
        if (isset($map['SettleInfo'])) {
            $model->settleInfo = $map['SettleInfo'];
        }
        if (isset($map['OriginSiteUserId'])) {
            $model->originSiteUserId = $map['OriginSiteUserId'];
        }
        if (isset($map['OriginSiteUserName'])) {
            $model->originSiteUserName = $map['OriginSiteUserName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['TenantName'])) {
            $model->tenantName = $map['TenantName'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['Business'])) {
            $model->business = $map['Business'];
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['OriginSite'])) {
            $model->originSite = $map['OriginSite'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
