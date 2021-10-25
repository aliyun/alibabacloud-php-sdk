<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\UniMkt\V20181212\Models;

use AlibabaCloud\Tea\Model;

class QueryIncomeDataRequest extends Model
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
     * @var mixed[]
     */
    public $mediaName;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $mediaId;

    /**
     * @var string
     */
    public $adSlotId;

    /**
     * @var string
     */
    public $adSlotName;

    /**
     * @var string
     */
    public $adSlotType;

    /**
     * @var string
     */
    public $dimension;

    /**
     * @var string
     */
    public $environment;

    /**
     * @var string
     */
    public $queryType;
    protected $_name = [
        'business'         => 'Business',
        'appName'          => 'AppName',
        'originSiteUserId' => 'OriginSiteUserId',
        'tenantId'         => 'TenantId',
        'userId'           => 'UserId',
        'userSite'         => 'UserSite',
        'mediaName'        => 'MediaName',
        'startTime'        => 'StartTime',
        'endTime'          => 'EndTime',
        'mediaId'          => 'MediaId',
        'adSlotId'         => 'AdSlotId',
        'adSlotName'       => 'AdSlotName',
        'adSlotType'       => 'AdSlotType',
        'dimension'        => 'Dimension',
        'environment'      => 'Environment',
        'queryType'        => 'QueryType',
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
        if (null !== $this->mediaName) {
            $res['MediaName'] = $this->mediaName;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->adSlotId) {
            $res['AdSlotId'] = $this->adSlotId;
        }
        if (null !== $this->adSlotName) {
            $res['AdSlotName'] = $this->adSlotName;
        }
        if (null !== $this->adSlotType) {
            $res['AdSlotType'] = $this->adSlotType;
        }
        if (null !== $this->dimension) {
            $res['Dimension'] = $this->dimension;
        }
        if (null !== $this->environment) {
            $res['Environment'] = $this->environment;
        }
        if (null !== $this->queryType) {
            $res['QueryType'] = $this->queryType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryIncomeDataRequest
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
        if (isset($map['MediaName'])) {
            $model->mediaName = $map['MediaName'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['AdSlotId'])) {
            $model->adSlotId = $map['AdSlotId'];
        }
        if (isset($map['AdSlotName'])) {
            $model->adSlotName = $map['AdSlotName'];
        }
        if (isset($map['AdSlotType'])) {
            $model->adSlotType = $map['AdSlotType'];
        }
        if (isset($map['Dimension'])) {
            $model->dimension = $map['Dimension'];
        }
        if (isset($map['Environment'])) {
            $model->environment = $map['Environment'];
        }
        if (isset($map['QueryType'])) {
            $model->queryType = $map['QueryType'];
        }

        return $model;
    }
}
