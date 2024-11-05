<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DetachDatabaseAccountsFromUserGroupResponseBody\results;

use AlibabaCloud\Tea\Model;

class databaseAccounts extends Model
{
    /**
     * @description The error code that is returned. If OK is returned, the operation was successful. If other error codes are returned, the operation failed.
     *
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @description The ID of the database account on which the permissions are revoked.
     *
     * @example 5
     *
     * @var string
     */
    public $databaseAccountId;

    /**
     * @description The error message that is returned.
     *
     * @example N/A
     *
     * @var string
     */
    public $message;
    protected $_name = [
        'code'              => 'Code',
        'databaseAccountId' => 'DatabaseAccountId',
        'message'           => 'Message',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->databaseAccountId) {
            $res['DatabaseAccountId'] = $this->databaseAccountId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return databaseAccounts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['DatabaseAccountId'])) {
            $model->databaseAccountId = $map['DatabaseAccountId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        return $model;
    }
}
