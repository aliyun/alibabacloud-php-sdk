<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeOpenSearchAccountInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeOpenSearchAccountInfoResponseBody\data\accounts;

class data extends Model
{
    /**
     * @var accounts[]
     */
    public $accounts;

    /**
     * @var string
     */
    public $passwordLastModified;

    /**
     * @var string
     */
    public $username;
    protected $_name = [
        'accounts' => 'Accounts',
        'passwordLastModified' => 'PasswordLastModified',
        'username' => 'Username',
    ];

    public function validate()
    {
        if (\is_array($this->accounts)) {
            Model::validateArray($this->accounts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accounts) {
            if (\is_array($this->accounts)) {
                $res['Accounts'] = [];
                $n1 = 0;
                foreach ($this->accounts as $item1) {
                    $res['Accounts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->passwordLastModified) {
            $res['PasswordLastModified'] = $this->passwordLastModified;
        }

        if (null !== $this->username) {
            $res['Username'] = $this->username;
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
            if (!empty($map['Accounts'])) {
                $model->accounts = [];
                $n1 = 0;
                foreach ($map['Accounts'] as $item1) {
                    $model->accounts[$n1] = accounts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PasswordLastModified'])) {
            $model->passwordLastModified = $map['PasswordLastModified'];
        }

        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
