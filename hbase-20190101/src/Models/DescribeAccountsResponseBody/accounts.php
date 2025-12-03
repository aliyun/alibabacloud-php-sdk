<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeAccountsResponseBody;

use AlibabaCloud\Dara\Model;

class accounts extends Model
{
    /**
     * @var string[]
     */
    public $account;
    protected $_name = [
        'account' => 'account',
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
                $res['account'] = [];
                $n1 = 0;
                foreach ($this->account as $item1) {
                    $res['account'][$n1] = $item1;
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
        if (isset($map['account'])) {
            if (!empty($map['account'])) {
                $model->account = [];
                $n1 = 0;
                foreach ($map['account'] as $item1) {
                    $model->account[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
