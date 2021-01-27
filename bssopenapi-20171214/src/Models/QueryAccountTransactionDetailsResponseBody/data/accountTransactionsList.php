<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryAccountTransactionDetailsResponseBody\data;

use AlibabaCloud\Tea\Model;

class accountTransactionsList extends Model
{
    /**
     * @var \AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryAccountTransactionDetailsResponseBody\data\accountTransactionsList\accountTransactionsList[]
     */
    public $accountTransactionsList;
    protected $_name = [
        'accountTransactionsList' => 'AccountTransactionsList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountTransactionsList) {
            $res['AccountTransactionsList'] = [];
            if (null !== $this->accountTransactionsList && \is_array($this->accountTransactionsList)) {
                $n = 0;
                foreach ($this->accountTransactionsList as $item) {
                    $res['AccountTransactionsList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accountTransactionsList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountTransactionsList'])) {
            if (!empty($map['AccountTransactionsList'])) {
                $model->accountTransactionsList = [];
                $n                              = 0;
                foreach ($map['AccountTransactionsList'] as $item) {
                    $model->accountTransactionsList[$n++] = null !== $item ? \AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryAccountTransactionDetailsResponseBody\data\accountTransactionsList\accountTransactionsList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
