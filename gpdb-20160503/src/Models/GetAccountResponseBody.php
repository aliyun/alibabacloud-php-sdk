<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class GetAccountResponseBody extends Model
{
    /**
     * @description The new description of the database account.
     *
     *   The description must start with a letter.
     *   The description cannot start with `http://` or `https://`.
     *   The description can contain letters, underscores (_), hyphens (-), and digits.
     *   The description must be 2 to 256 characters in length.
     *
     * @example The instance used by this account to log in is DBInstanceId. The name used to log in is AccountName.
     *
     * @var string
     */
    public $accountDescription;

    /**
     * @description The name of the initial account.
     *
     *   The name can contain lowercase letters, digits, and underscores (_).
     *   The name must start with a lowercase letter and end with a lowercase letter or a digit.
     *   The name cannot start with gp.
     *   The name must be 2 to 16 characters in length.
     *
     * @example testaccount
     *
     * @var string
     */
    public $accountName;

    /**
     * @description The status of the member that you want to query.
     *
     *   **enabled**: managed.
     *   **disabled**: not managed.
     *   **disabling**: being deleted.
     *
     * @example 1
     *
     * @var string
     */
    public $accountStatus;

    /**
     * @description *   Normal: standard account
     *   Super: privileged account
     *
     * @example Normal
     *
     * @var string
     */
    public $accountType;

    /**
     * @description The instance ID.
     *
     * >  You can call the [DescribeDBInstances](https://help.aliyun.com/document_detail/86911.html) operation to query the information about all AnalyticDB for PostgreSQL instances within a region, including instance IDs.
     * @example gp-xxxxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description Id of the request
     *
     * @example CA7E4276-E2D5-5F8D-AF06-9EAB3F6C****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accountDescription' => 'AccountDescription',
        'accountName'        => 'AccountName',
        'accountStatus'      => 'AccountStatus',
        'accountType'        => 'AccountType',
        'DBInstanceId'       => 'DBInstanceId',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountDescription) {
            $res['AccountDescription'] = $this->accountDescription;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->accountStatus) {
            $res['AccountStatus'] = $this->accountStatus;
        }
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAccountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountDescription'])) {
            $model->accountDescription = $map['AccountDescription'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['AccountStatus'])) {
            $model->accountStatus = $map['AccountStatus'];
        }
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
