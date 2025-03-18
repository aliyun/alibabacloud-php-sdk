<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\AttachDatabaseAccountsToUserResponseBody\results;

use AlibabaCloud\Tea\Model;

class databaseAccounts extends Model
{
    /**
     * @description The error code that is returned. If OK is returned, the authorization was successful. If another error code is returned, the authorization failed.
     *
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @description The database account ID.
     *
     * @example 6
     *
     * @var string
     */
    public $databaseAccountId;

    /**
     * @description The error message that is returned.
     *
     * @example success
     *
     * @var string
     */
    public $message;
    protected $_name = [
        'code' => 'Code',
        'databaseAccountId' => 'DatabaseAccountId',
        'message' => 'Message',
    ];

    public function validate() {}

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
