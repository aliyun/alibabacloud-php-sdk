<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListDelegatedAdministratorsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListDelegatedAdministratorsResponseBody\accounts\account;

class accounts extends Model
{
    /**
     * @var account[]
     */
    public $account;
    protected $_name = [
        'account' => 'Account',
    ];

    public function validate()
    {
        if (\is_array($this->account)) {
            Model::validateArray($this->account);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->account) {
            if (\is_array($this->account)) {
                $res['Account'] = [];
                $n1 = 0;
                foreach ($this->account as $item1) {
                    $res['Account'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Account'])) {
            if (!empty($map['Account'])) {
                $model->account = [];
                $n1 = 0;
                foreach ($map['Account'] as $item1) {
                    $model->account[$n1] = account::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
