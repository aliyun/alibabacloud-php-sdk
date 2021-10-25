<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\UniMkt\V20181212\Models;

use AlibabaCloud\Tea\Model;

class ModifyMediaShrinkRequest extends Model
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
    public $mediaShrink;

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
        'mediaShrink'      => 'Media',
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
        if (null !== $this->mediaShrink) {
            $res['Media'] = $this->mediaShrink;
        }
        if (null !== $this->environment) {
            $res['Environment'] = $this->environment;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyMediaShrinkRequest
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
        if (isset($map['Media'])) {
            $model->mediaShrink = $map['Media'];
        }
        if (isset($map['Environment'])) {
            $model->environment = $map['Environment'];
        }

        return $model;
    }
}
