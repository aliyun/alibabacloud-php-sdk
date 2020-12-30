<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\ListServerLockResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $serverLockStatus;

    /**
     * @var string
     */
    public $lockInstanceId;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $expireDate;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $lockProductId;

    /**
     * @var string
     */
    public $domainInstanceId;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $domainName;
    protected $_name = [
        'serverLockStatus' => 'ServerLockStatus',
        'lockInstanceId'   => 'LockInstanceId',
        'userId'           => 'UserId',
        'gmtCreate'        => 'GmtCreate',
        'expireDate'       => 'ExpireDate',
        'startDate'        => 'StartDate',
        'lockProductId'    => 'LockProductId',
        'domainInstanceId' => 'DomainInstanceId',
        'gmtModified'      => 'GmtModified',
        'domainName'       => 'DomainName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serverLockStatus) {
            $res['ServerLockStatus'] = $this->serverLockStatus;
        }
        if (null !== $this->lockInstanceId) {
            $res['LockInstanceId'] = $this->lockInstanceId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->expireDate) {
            $res['ExpireDate'] = $this->expireDate;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->lockProductId) {
            $res['LockProductId'] = $this->lockProductId;
        }
        if (null !== $this->domainInstanceId) {
            $res['DomainInstanceId'] = $this->domainInstanceId;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
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
        if (isset($map['ServerLockStatus'])) {
            $model->serverLockStatus = $map['ServerLockStatus'];
        }
        if (isset($map['LockInstanceId'])) {
            $model->lockInstanceId = $map['LockInstanceId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['ExpireDate'])) {
            $model->expireDate = $map['ExpireDate'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['LockProductId'])) {
            $model->lockProductId = $map['LockProductId'];
        }
        if (isset($map['DomainInstanceId'])) {
            $model->domainInstanceId = $map['DomainInstanceId'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        return $model;
    }
}
