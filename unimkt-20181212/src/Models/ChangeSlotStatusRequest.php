<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\UniMkt\V20181212\Models;

use AlibabaCloud\Tea\Model;

class ChangeSlotStatusRequest extends Model
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
    public $adSlotId;

    /**
     * @var string
     */
    public $adSlotStatus;

    /**
     * @var string
     */
    public $adSlotCorporateStatus;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $messageKey;

    /**
     * @var string
     */
    public $environment;
    protected $_name = [
        'business'              => 'Business',
        'appName'               => 'AppName',
        'originSiteUserId'      => 'OriginSiteUserId',
        'tenantId'              => 'TenantId',
        'userId'                => 'UserId',
        'userSite'              => 'UserSite',
        'adSlotId'              => 'AdSlotId',
        'adSlotStatus'          => 'AdSlotStatus',
        'adSlotCorporateStatus' => 'AdSlotCorporateStatus',
        'message'               => 'Message',
        'messageKey'            => 'MessageKey',
        'environment'           => 'Environment',
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
        if (null !== $this->adSlotId) {
            $res['AdSlotId'] = $this->adSlotId;
        }
        if (null !== $this->adSlotStatus) {
            $res['AdSlotStatus'] = $this->adSlotStatus;
        }
        if (null !== $this->adSlotCorporateStatus) {
            $res['AdSlotCorporateStatus'] = $this->adSlotCorporateStatus;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->messageKey) {
            $res['MessageKey'] = $this->messageKey;
        }
        if (null !== $this->environment) {
            $res['Environment'] = $this->environment;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChangeSlotStatusRequest
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
        if (isset($map['AdSlotId'])) {
            $model->adSlotId = $map['AdSlotId'];
        }
        if (isset($map['AdSlotStatus'])) {
            $model->adSlotStatus = $map['AdSlotStatus'];
        }
        if (isset($map['AdSlotCorporateStatus'])) {
            $model->adSlotCorporateStatus = $map['AdSlotCorporateStatus'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['MessageKey'])) {
            $model->messageKey = $map['MessageKey'];
        }
        if (isset($map['Environment'])) {
            $model->environment = $map['Environment'];
        }

        return $model;
    }
}
