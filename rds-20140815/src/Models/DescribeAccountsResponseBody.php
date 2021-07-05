<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAccountsResponseBody\accounts;
use AlibabaCloud\Tea\Model;

class DescribeAccountsResponseBody extends Model
{
    /**
     * @var string
     */
    public $systemAdminAccountStatus;

    /**
     * @var string
     */
    public $systemAdminAccountFirstActivationTime;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalRecordCount;

    /**
     * @var accounts
     */
    public $accounts;
    protected $_name = [
        'systemAdminAccountStatus'              => 'SystemAdminAccountStatus',
        'systemAdminAccountFirstActivationTime' => 'SystemAdminAccountFirstActivationTime',
        'pageNumber'                            => 'PageNumber',
        'requestId'                             => 'RequestId',
        'totalRecordCount'                      => 'TotalRecordCount',
        'accounts'                              => 'Accounts',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->systemAdminAccountStatus) {
            $res['SystemAdminAccountStatus'] = $this->systemAdminAccountStatus;
        }
        if (null !== $this->systemAdminAccountFirstActivationTime) {
            $res['SystemAdminAccountFirstActivationTime'] = $this->systemAdminAccountFirstActivationTime;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalRecordCount) {
            $res['TotalRecordCount'] = $this->totalRecordCount;
        }
        if (null !== $this->accounts) {
            $res['Accounts'] = null !== $this->accounts ? $this->accounts->toMap() : null;
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
        if (isset($map['SystemAdminAccountStatus'])) {
            $model->systemAdminAccountStatus = $map['SystemAdminAccountStatus'];
        }
        if (isset($map['SystemAdminAccountFirstActivationTime'])) {
            $model->systemAdminAccountFirstActivationTime = $map['SystemAdminAccountFirstActivationTime'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalRecordCount'])) {
            $model->totalRecordCount = $map['TotalRecordCount'];
        }
        if (isset($map['Accounts'])) {
            $model->accounts = accounts::fromMap($map['Accounts']);
        }

        return $model;
    }
}
