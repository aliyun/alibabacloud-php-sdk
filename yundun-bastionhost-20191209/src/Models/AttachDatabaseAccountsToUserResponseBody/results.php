<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\AttachDatabaseAccountsToUserResponseBody;

use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\AttachDatabaseAccountsToUserResponseBody\results\databaseAccounts;
use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @description The error code that is returned. If **OK** is returned, the authorization was successful. If another error code is returned, the authorization failed.
     *
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @description A list that shows the authorization results of the database accounts.
     *
     * @var databaseAccounts[]
     */
    public $databaseAccounts;

    /**
     * @description The database ID.
     *
     * @example 22
     *
     * @var string
     */
    public $databaseId;

    /**
     * @description The error message that is returned.
     *
     * @var string
     */
    public $message;

    /**
     * @description The user ID.
     *
     * @example 1
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'code'             => 'Code',
        'databaseAccounts' => 'DatabaseAccounts',
        'databaseId'       => 'DatabaseId',
        'message'          => 'Message',
        'userId'           => 'UserId',
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
        if (null !== $this->databaseAccounts) {
            $res['DatabaseAccounts'] = [];
            if (null !== $this->databaseAccounts && \is_array($this->databaseAccounts)) {
                $n = 0;
                foreach ($this->databaseAccounts as $item) {
                    $res['DatabaseAccounts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->databaseId) {
            $res['DatabaseId'] = $this->databaseId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return results
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['DatabaseAccounts'])) {
            if (!empty($map['DatabaseAccounts'])) {
                $model->databaseAccounts = [];
                $n                       = 0;
                foreach ($map['DatabaseAccounts'] as $item) {
                    $model->databaseAccounts[$n++] = null !== $item ? databaseAccounts::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DatabaseId'])) {
            $model->databaseId = $map['DatabaseId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
