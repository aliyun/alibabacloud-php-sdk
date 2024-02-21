<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAccountsResponseBody\accounts;

use AlibabaCloud\Tea\Model;

class account extends Model
{
    /**
     * @description The description of the account.
     *
     * @example Admin
     *
     * @var string
     */
    public $accountDescription;

    /**
     * @description The name of the account.
     *
     * @example root
     *
     * @var string
     */
    public $accountName;

    /**
     * @description The status of the account. Valid values:
     *
     *   **Unavailable**
     *   **Available**
     *
     * @example Available
     *
     * @var string
     */
    public $accountStatus;

    /**
     * @description The role of the account. Valid values:
     *
     *   **db**: shard node
     *   **cs**: Configserver node
     *   **mongos**: mongos node
     *   **logic**: sharded cluster instance
     *   **normal**: replica set instance
     *
     * @example mongos
     *
     * @var string
     */
    public $characterType;

    /**
     * @description The ID of the instance to which the account belongs.
     *
     * @example dds-bp1fd530f271****
     *
     * @var string
     */
    public $DBInstanceId;
    protected $_name = [
        'accountDescription' => 'AccountDescription',
        'accountName'        => 'AccountName',
        'accountStatus'      => 'AccountStatus',
        'characterType'      => 'CharacterType',
        'DBInstanceId'       => 'DBInstanceId',
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
        if (null !== $this->characterType) {
            $res['CharacterType'] = $this->characterType;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return account
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
        if (isset($map['CharacterType'])) {
            $model->characterType = $map['CharacterType'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        return $model;
    }
}
