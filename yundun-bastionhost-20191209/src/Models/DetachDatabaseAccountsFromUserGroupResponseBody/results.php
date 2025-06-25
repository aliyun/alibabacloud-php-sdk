<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DetachDatabaseAccountsFromUserGroupResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DetachDatabaseAccountsFromUserGroupResponseBody\results\databaseAccounts;

class results extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var databaseAccounts[]
     */
    public $databaseAccounts;

    /**
     * @var string
     */
    public $databaseId;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $userGroupId;
    protected $_name = [
        'code' => 'Code',
        'databaseAccounts' => 'DatabaseAccounts',
        'databaseId' => 'DatabaseId',
        'message' => 'Message',
        'userGroupId' => 'UserGroupId',
    ];

    public function validate()
    {
        if (\is_array($this->databaseAccounts)) {
            Model::validateArray($this->databaseAccounts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->databaseAccounts) {
            if (\is_array($this->databaseAccounts)) {
                $res['DatabaseAccounts'] = [];
                $n1 = 0;
                foreach ($this->databaseAccounts as $item1) {
                    $res['DatabaseAccounts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->databaseId) {
            $res['DatabaseId'] = $this->databaseId;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->userGroupId) {
            $res['UserGroupId'] = $this->userGroupId;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['DatabaseAccounts'])) {
            if (!empty($map['DatabaseAccounts'])) {
                $model->databaseAccounts = [];
                $n1 = 0;
                foreach ($map['DatabaseAccounts'] as $item1) {
                    $model->databaseAccounts[$n1] = databaseAccounts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DatabaseId'])) {
            $model->databaseId = $map['DatabaseId'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['UserGroupId'])) {
            $model->userGroupId = $map['UserGroupId'];
        }

        return $model;
    }
}
