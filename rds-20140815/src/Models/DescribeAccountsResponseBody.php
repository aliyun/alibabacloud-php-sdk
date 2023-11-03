<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAccountsResponseBody\accounts;
use AlibabaCloud\Tea\Model;

class DescribeAccountsResponseBody extends Model
{
    /**
     * @description The details about the account.
     *
     * @var accounts
     */
    public $accounts;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The request ID.
     *
     * @example A2E94301-D07F-4457-9B49-6AA2BB388C85
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The first time when the system admin account was enabled. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * >  This parameter is returned only for instances that run SQL Server.
     * @example 2020-02-06T11:00:00Z
     *
     * @var string
     */
    public $systemAdminAccountFirstActivationTime;

    /**
     * @description Indicates whether the system admin account was enabled. Valid values:
     *
     *   **true**: The system admin account was enabled.
     *   **false**: The system admin account was disabled.
     *
     * >  The [system admin account](~~170736~~) is supported only for the instances that run SQL Server. If the instance runs SQL Server, a value is returned for this parameter. If the instance runs a different database engine, no value is returned for this parameter.
     * @example True
     *
     * @var string
     */
    public $systemAdminAccountStatus;

    /**
     * @description The total number of entries that are returned.
     *
     * @example 1
     *
     * @var int
     */
    public $totalRecordCount;
    protected $_name = [
        'accounts'                              => 'Accounts',
        'pageNumber'                            => 'PageNumber',
        'requestId'                             => 'RequestId',
        'systemAdminAccountFirstActivationTime' => 'SystemAdminAccountFirstActivationTime',
        'systemAdminAccountStatus'              => 'SystemAdminAccountStatus',
        'totalRecordCount'                      => 'TotalRecordCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accounts) {
            $res['Accounts'] = null !== $this->accounts ? $this->accounts->toMap() : null;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->systemAdminAccountFirstActivationTime) {
            $res['SystemAdminAccountFirstActivationTime'] = $this->systemAdminAccountFirstActivationTime;
        }
        if (null !== $this->systemAdminAccountStatus) {
            $res['SystemAdminAccountStatus'] = $this->systemAdminAccountStatus;
        }
        if (null !== $this->totalRecordCount) {
            $res['TotalRecordCount'] = $this->totalRecordCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAccountsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Accounts'])) {
            $model->accounts = accounts::fromMap($map['Accounts']);
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SystemAdminAccountFirstActivationTime'])) {
            $model->systemAdminAccountFirstActivationTime = $map['SystemAdminAccountFirstActivationTime'];
        }
        if (isset($map['SystemAdminAccountStatus'])) {
            $model->systemAdminAccountStatus = $map['SystemAdminAccountStatus'];
        }
        if (isset($map['TotalRecordCount'])) {
            $model->totalRecordCount = $map['TotalRecordCount'];
        }

        return $model;
    }
}
