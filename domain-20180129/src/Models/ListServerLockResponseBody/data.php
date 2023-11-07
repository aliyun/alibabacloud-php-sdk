<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\ListServerLockResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example S20190N1DAI4****
     *
     * @var string
     */
    public $domainInstanceId;

    /**
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @example 2030-07-10 17:37:36
     *
     * @var string
     */
    public $expireDate;

    /**
     * @example 2020-02-19 16:38:07
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2022-02-19 16:40:38
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example S2021591IQ28****
     *
     * @var string
     */
    public $lockInstanceId;

    /**
     * @example 1807**
     *
     * @var string
     */
    public $lockProductId;

    /**
     * @example 2
     *
     * @var string
     */
    public $serverLockStatus;

    /**
     * @example 2021-07-10 17:37:36
     *
     * @var string
     */
    public $startDate;

    /**
     * @example 121000000****
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'domainInstanceId' => 'DomainInstanceId',
        'domainName'       => 'DomainName',
        'expireDate'       => 'ExpireDate',
        'gmtCreate'        => 'GmtCreate',
        'gmtModified'      => 'GmtModified',
        'lockInstanceId'   => 'LockInstanceId',
        'lockProductId'    => 'LockProductId',
        'serverLockStatus' => 'ServerLockStatus',
        'startDate'        => 'StartDate',
        'userId'           => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainInstanceId) {
            $res['DomainInstanceId'] = $this->domainInstanceId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->expireDate) {
            $res['ExpireDate'] = $this->expireDate;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->lockInstanceId) {
            $res['LockInstanceId'] = $this->lockInstanceId;
        }
        if (null !== $this->lockProductId) {
            $res['LockProductId'] = $this->lockProductId;
        }
        if (null !== $this->serverLockStatus) {
            $res['ServerLockStatus'] = $this->serverLockStatus;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['DomainInstanceId'])) {
            $model->domainInstanceId = $map['DomainInstanceId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['ExpireDate'])) {
            $model->expireDate = $map['ExpireDate'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['LockInstanceId'])) {
            $model->lockInstanceId = $map['LockInstanceId'];
        }
        if (isset($map['LockProductId'])) {
            $model->lockProductId = $map['LockProductId'];
        }
        if (isset($map['ServerLockStatus'])) {
            $model->serverLockStatus = $map['ServerLockStatus'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
