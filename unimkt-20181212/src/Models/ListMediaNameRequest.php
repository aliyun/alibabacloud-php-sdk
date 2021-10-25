<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\UniMkt\V20181212\Models;

use AlibabaCloud\Tea\Model;

class ListMediaNameRequest extends Model
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
    public $startCreateTime;

    /**
     * @var int
     */
    public $endCreateTime;

    /**
     * @var string
     */
    public $mediaStatus;

    /**
     * @var string
     */
    public $accessStatus;

    /**
     * @var string
     */
    public $os;

    /**
     * @var string
     */
    public $mediaType;

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

    /**
     * @var string
     */
    public $firstScene;

    /**
     * @var string
     */
    public $secondScene;
    protected $_name = [
        'business'         => 'Business',
        'appName'          => 'AppName',
        'originSiteUserId' => 'OriginSiteUserId',
        'tenantId'         => 'TenantId',
        'userId'           => 'UserId',
        'userSite'         => 'UserSite',
        'mediaName'        => 'MediaName',
        'startCreateTime'  => 'StartCreateTime',
        'endCreateTime'    => 'EndCreateTime',
        'mediaStatus'      => 'MediaStatus',
        'accessStatus'     => 'AccessStatus',
        'os'               => 'Os',
        'mediaType'        => 'MediaType',
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
        'environment'      => 'Environment',
        'firstScene'       => 'FirstScene',
        'secondScene'      => 'SecondScene',
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
        if (null !== $this->startCreateTime) {
            $res['StartCreateTime'] = $this->startCreateTime;
        }
        if (null !== $this->endCreateTime) {
            $res['EndCreateTime'] = $this->endCreateTime;
        }
        if (null !== $this->mediaStatus) {
            $res['MediaStatus'] = $this->mediaStatus;
        }
        if (null !== $this->accessStatus) {
            $res['AccessStatus'] = $this->accessStatus;
        }
        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }
        if (null !== $this->mediaType) {
            $res['MediaType'] = $this->mediaType;
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
        if (null !== $this->firstScene) {
            $res['FirstScene'] = $this->firstScene;
        }
        if (null !== $this->secondScene) {
            $res['SecondScene'] = $this->secondScene;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMediaNameRequest
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
        if (isset($map['StartCreateTime'])) {
            $model->startCreateTime = $map['StartCreateTime'];
        }
        if (isset($map['EndCreateTime'])) {
            $model->endCreateTime = $map['EndCreateTime'];
        }
        if (isset($map['MediaStatus'])) {
            $model->mediaStatus = $map['MediaStatus'];
        }
        if (isset($map['AccessStatus'])) {
            $model->accessStatus = $map['AccessStatus'];
        }
        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }
        if (isset($map['MediaType'])) {
            $model->mediaType = $map['MediaType'];
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
        if (isset($map['FirstScene'])) {
            $model->firstScene = $map['FirstScene'];
        }
        if (isset($map['SecondScene'])) {
            $model->secondScene = $map['SecondScene'];
        }

        return $model;
    }
}
