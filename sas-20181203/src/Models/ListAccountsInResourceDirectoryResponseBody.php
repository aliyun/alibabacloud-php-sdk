<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListAccountsInResourceDirectoryResponseBody\accounts;

class ListAccountsInResourceDirectoryResponseBody extends Model
{
    /**
     * @var accounts[]
     */
    public $accounts;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accounts'  => 'Accounts',
        'requestId' => 'RequestId',
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
                $n1              = 0;
                foreach ($this->accounts as $item1) {
                    $res['Accounts'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
                $n1              = 0;
                foreach ($map['Accounts'] as $item1) {
                    $model->accounts[$n1++] = accounts::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
