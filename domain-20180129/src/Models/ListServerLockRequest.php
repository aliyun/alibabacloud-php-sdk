<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class ListServerLockRequest extends Model
{
    /**
     * @example 2021-07-10 17:37:36
     *
     * @var int
     */
    public $beginStartDate;

    /**
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @example 2021-07-10 17:37:36
     *
     * @var int
     */
    public $endExpireDate;

    /**
     * @example 2020-07-10 17:37:36
     *
     * @var int
     */
    public $endStartDate;

    /**
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @example 1807**
     *
     * @var string
     */
    public $lockProductId;

    /**
     * @var string
     */
    public $orderBy;

    /**
     * @var string
     */
    public $orderByType;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 1
     *
     * @var int
     */
    public $serverLockStatus;

    /**
     * @example 2020-07-10 17:37:36
     *
     * @var int
     */
    public $startExpireDate;

    /**
     * @example 127.0.0.1
     *
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
        'orderBy'          => 'OrderBy',
        'orderByType'      => 'OrderByType',
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
        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }
        if (null !== $this->orderByType) {
            $res['OrderByType'] = $this->orderByType;
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
        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }
        if (isset($map['OrderByType'])) {
            $model->orderByType = $map['OrderByType'];
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
