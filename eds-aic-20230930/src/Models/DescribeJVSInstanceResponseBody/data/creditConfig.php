<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeJVSInstanceResponseBody\data;

use AlibabaCloud\Dara\Model;

class creditConfig extends Model
{
    /**
     * @var int
     */
    public $creditLimit;

    /**
     * @var string
     */
    public $limitPeriod;
    protected $_name = [
        'creditLimit' => 'CreditLimit',
        'limitPeriod' => 'LimitPeriod',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creditLimit) {
            $res['CreditLimit'] = $this->creditLimit;
        }

        if (null !== $this->limitPeriod) {
            $res['LimitPeriod'] = $this->limitPeriod;
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
        if (isset($map['CreditLimit'])) {
            $model->creditLimit = $map['CreditLimit'];
        }

        if (isset($map['LimitPeriod'])) {
            $model->limitPeriod = $map['LimitPeriod'];
        }

        return $model;
    }
}
