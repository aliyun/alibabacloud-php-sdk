<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\CheckDomainResponseBody\staticPriceInfo;

use AlibabaCloud\Tea\Model;

class priceInfo extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var float
     */
    public $money;

    /**
     * @var int
     */
    public $period;
    protected $_name = [
        'action' => 'action',
        'money'  => 'money',
        'period' => 'period',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['action'] = $this->action;
        }
        if (null !== $this->money) {
            $res['money'] = $this->money;
        }
        if (null !== $this->period) {
            $res['period'] = $this->period;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return priceInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['action'])) {
            $model->action = $map['action'];
        }
        if (isset($map['money'])) {
            $model->money = $map['money'];
        }
        if (isset($map['period'])) {
            $model->period = $map['period'];
        }

        return $model;
    }
}
