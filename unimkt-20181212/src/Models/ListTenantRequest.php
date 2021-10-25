<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\UniMkt\V20181212\Models;

use AlibabaCloud\Tea\Model;

class ListTenantRequest extends Model
{
    /**
     * @var string
     */
    public $business;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $originSiteUserId;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userSite;

    /**
     * @var string
     */
    public $tenantName;

    /**
     * @var int
     */
    public $startCreateTime;

    /**
     * @var int
     */
    public $endCreateTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $environment;
    protected $_name = [
        'business'         => 'Business',
        'appName'          => 'AppName',
        'originSiteUserId' => 'OriginSiteUserId',
        'tenantId'         => 'TenantId',
        'userId'           => 'UserId',
        'userSite'         => 'UserSite',
        'tenantName'       => 'TenantName',
        'startCreateTime'  => 'StartCreateTime',
        'endCreateTime'    => 'EndCreateTime',
        'status'           => 'Status',
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
        'environment'      => 'Environment',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->business) {
            $res['Business'] = $this->business;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->originSiteUserId) {
            $res['OriginSiteUserId'] = $this->originSiteUserId;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userSite) {
            $res['UserSite'] = $this->userSite;
        }
        if (null !== $this->tenantName) {
            $res['TenantName'] = $this->tenantName;
        }
        if (null !== $this->startCreateTime) {
            $res['StartCreateTime'] = $this->startCreateTime;
        }
        if (null !== $this->endCreateTime) {
            $res['EndCreateTime'] = $this->endCreateTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->environment) {
            $res['Environment'] = $this->environment;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTenantRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Business'])) {
            $model->business = $map['Business'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['OriginSiteUserId'])) {
            $model->originSiteUserId = $map['OriginSiteUserId'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserSite'])) {
            $model->userSite = $map['UserSite'];
        }
        if (isset($map['TenantName'])) {
            $model->tenantName = $map['TenantName'];
        }
        if (isset($map['StartCreateTime'])) {
            $model->startCreateTime = $map['StartCreateTime'];
        }
        if (isset($map['EndCreateTime'])) {
            $model->endCreateTime = $map['EndCreateTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Environment'])) {
            $model->environment = $map['Environment'];
        }

        return $model;
    }
}
