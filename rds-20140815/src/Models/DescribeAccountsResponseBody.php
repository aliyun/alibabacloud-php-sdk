<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAccountsResponseBody\accounts;

class DescribeAccountsResponseBody extends Model
{
    /**
     * @var accounts
     */
    public $accounts;
    /**
     * @var int
     */
    public $pageNumber;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var string
     */
    public $systemAdminAccountFirstActivationTime;
    /**
     * @var string
     */
    public $systemAdminAccountStatus;
    /**
     * @var int
     */
    public $totalRecordCount;
    protected $_name = [
        'accounts'                              => 'Accounts',
        'pageNumber'                            => 'PageNumber',
        'requestId'                             => 'RequestId',
        'resourceGroupId'                       => 'ResourceGroupId',
        'systemAdminAccountFirstActivationTime' => 'SystemAdminAccountFirstActivationTime',
        'systemAdminAccountStatus'              => 'SystemAdminAccountStatus',
        'totalRecordCount'                      => 'TotalRecordCount',
    ];

    public function validate()
    {
        if (null !== $this->accounts) {
            $this->accounts->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accounts) {
            $res['Accounts'] = null !== $this->accounts ? $this->accounts->toArray($noStream) : $this->accounts;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
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
