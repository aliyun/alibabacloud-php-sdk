<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class ListServerLockRequest extends Model
{
    /**
     * @var int
     */
    public $beginStartDate;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var int
     */
    public $endExpireDate;

    /**
     * @var int
     */
    public $endStartDate;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $lockProductId;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $serverLockStatus;

    /**
     * @var int
     */
    public $startExpireDate;

    /**
     * @var string
     */
    public $userClientIp;
    protected $_name = [
        'beginStartDate'   => 'BeginStartDate',
        'domainName'       => 'DomainName',
        'endExpireDate'    => 'EndExpireDate',
        'endStartDate'     => 'EndStartDate',
        'lang'             => 'Lang',
        'lockProductId'    => 'LockProductId',
        'pageNum'          => 'PageNum',
        'pageSize'         => 'PageSize',
        'serverLockStatus' => 'ServerLockStatus',
        'startExpireDate'  => 'StartExpireDate',
        'userClientIp'     => 'UserClientIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginStartDate) {
            $res['BeginStartDate'] = $this->beginStartDate;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->endExpireDate) {
            $res['EndExpireDate'] = $this->endExpireDate;
        }
        if (null !== $this->endStartDate) {
            $res['EndStartDate'] = $this->endStartDate;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->lockProductId) {
            $res['LockProductId'] = $this->lockProductId;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->serverLockStatus) {
            $res['ServerLockStatus'] = $this->serverLockStatus;
        }
        if (null !== $this->startExpireDate) {
            $res['StartExpireDate'] = $this->startExpireDate;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListServerLockRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeginStartDate'])) {
            $model->beginStartDate = $map['BeginStartDate'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['EndExpireDate'])) {
            $model->endExpireDate = $map['EndExpireDate'];
        }
        if (isset($map['EndStartDate'])) {
            $model->endStartDate = $map['EndStartDate'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['LockProductId'])) {
            $model->lockProductId = $map['LockProductId'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ServerLockStatus'])) {
            $model->serverLockStatus = $map['ServerLockStatus'];
        }
        if (isset($map['StartExpireDate'])) {
            $model->startExpireDate = $map['StartExpireDate'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }

        return $model;
    }
}
