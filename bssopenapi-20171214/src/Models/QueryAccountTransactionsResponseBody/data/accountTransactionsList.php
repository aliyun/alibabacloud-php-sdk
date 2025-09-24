<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryAccountTransactionsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryAccountTransactionsResponseBody\data\accountTransactionsList\accountTransactionsList;

class accountTransactionsList extends Model
{
    /**
     * @var accountTransactionsList[]
     */
    public $accountTransactionsList;
    protected $_name = [
        'accountTransactionsList' => 'AccountTransactionsList',
    ];

    public function validate()
    {
        if (\is_array($this->accountTransactionsList)) {
            Model::validateArray($this->accountTransactionsList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountTransactionsList) {
            if (\is_array($this->accountTransactionsList)) {
                $res['AccountTransactionsList'] = [];
                $n1 = 0;
                foreach ($this->accountTransactionsList as $item1) {
                    $res['AccountTransactionsList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AccountTransactionsList'])) {
            if (!empty($map['AccountTransactionsList'])) {
                $model->accountTransactionsList = [];
                $n1 = 0;
                foreach ($map['AccountTransactionsList'] as $item1) {
                    $model->accountTransactionsList[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
