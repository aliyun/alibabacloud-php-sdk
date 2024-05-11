<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class ResetAccountPasswordRequest extends Model
{
    /**
     * @description The ID of the instance.
     *
     * This parameter is required.
     * @example testaccount_1
     *
     * @var string
     */
    public $accountName;

    /**
     * @description The name of the account.
     *
     * This parameter is required.
     * @example Testaccount_1
     *
     * @var string
     */
    public $accountPassword;

    /**
     * @description Before you call this operation, make sure that the following requirements are met:
     *
     *   The instance is in the running state.
     *   The instance is not locked.
     *
     * This parameter is required.
     * @example gp-t4nf48vf15713****
     *
     * @var string
     */
    public $DBInstanceId;
    protected $_name = [
        'accountName'     => 'AccountName',
        'accountPassword' => 'AccountPassword',
        'DBInstanceId'    => 'DBInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->accountPassword) {
            $res['AccountPassword'] = $this->accountPassword;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResetAccountPasswordRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['AccountPassword'])) {
            $model->accountPassword = $map['AccountPassword'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        return $model;
    }
}
