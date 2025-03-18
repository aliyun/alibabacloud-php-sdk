<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class DeleteAccountRequest extends Model
{
    /**
     * @description The name of the database account. The privileged account cannot be deleted.
     *
     * This parameter is required.
     *
     * @example testuser
     *
     * @var string
     */
    public $accountName;

    /**
     * @description The instance ID.
     *
     * This parameter is required.
     *
     * @example gp-bp***************
     *
     * @var string
     */
    public $DBInstanceId;
    protected $_name = [
        'accountName' => 'AccountName',
        'DBInstanceId' => 'DBInstanceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
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
     * @return DeleteAccountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        return $model;
    }
}
