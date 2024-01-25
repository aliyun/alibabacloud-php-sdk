<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class ListServerLockRequest extends Model
{
    /**
     * @description The start of the time range to query.
     *
     * @example 2021-07-10 17:37:36
     *
     * @var int
     */
    public $beginStartDate;

    /**
     * @description The domain name for which you want to query the enabled registry lock.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The end of the expiration time.
     *
     * @example 2021-07-10 17:37:36
     *
     * @var int
     */
    public $endExpireDate;

    /**
     * @description The end of the time range to query.
     *
     * @example 2020-07-10 17:37:36
     *
     * @var int
     */
    public $endStartDate;

    /**
     * @description The language of the error message to return if the request fails. Valid values:
     *
     *   zh: Chinese
     *   en: English
     *
     * Default value: en.
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The ID of the product to which the domain name with the registry lock enabled belongs.
     *
     * @example 1807**
     *
     * @var string
     */
    public $lockProductId;

    /**
     * @description The field that you use to sort the query results.
     *
     * Valid values:
     *
     *   EXPIRE_DATE
     *
     * @example EXPIRE_DATE
     *
     * @var string
     */
    public $orderBy;

    /**
     * @description The order of the information based on which you want to sort the domain names, such as the registration date and expiration date. Valid values: ASC and DESC. The value ASC specifies the ascending order. The value DESC specifies the descending order. If this parameter is not configured, the default value DESC is used.
     *
     * @example DESC
     *
     * @var string
     */
    public $orderByType;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description The number of entries per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The status of the registry lock. Valid values:
     *
     *   1: The registry lock is not enabled.
     *   2: The registry lock is enabled.
     *   3: The registry lock is disabled.
     *
     * @example 1
     *
     * @var int
     */
    public $serverLockStatus;

    /**
     * @description The start of the expiration time.
     *
     * @example 2020-07-10 17:37:36
     *
     * @var int
     */
    public $startExpireDate;

    /**
     * @description The IP address of the client. For example, you can set the value to **127.0.0.1**.
     *
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
