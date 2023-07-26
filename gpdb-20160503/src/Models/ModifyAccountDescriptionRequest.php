<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class ModifyAccountDescriptionRequest extends Model
{
    /**
     * @description The description of the account. The description must meet the following requirements:
     *
     *   The description must start with a letter.
     *   The description can contain letters, digits, underscores (\_), and hyphens (-).
     *   The description cannot start with `http://` or `https://`.
     *   The description must be 2 to 256 characters in length.
     *
     * @example testAccoutdescribe
     *
     * @var string
     */
    public $accountDescription;

    /**
     * @description The name of the database account.
     *
     * > You can call the [DescribeAccounts](~~~~) operation to query the information about database accounts in a cluster, including the database account name.
     * @example testAccout
     *
     * @var string
     */
    public $accountName;

    /**
     * @description The ID of the instance.
     *
     * @example gp-bp12ga6v69h86****
     *
     * @var string
     */
    public $DBInstanceId;
    protected $_name = [
        'accountDescription' => 'AccountDescription',
        'accountName'        => 'AccountName',
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
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyAccountDescriptionRequest
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
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        return $model;
    }
}
