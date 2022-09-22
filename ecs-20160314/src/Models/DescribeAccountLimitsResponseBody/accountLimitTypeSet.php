<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeAccountLimitsResponseBody;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeAccountLimitsResponseBody\accountLimitTypeSet\accountLimit;
use AlibabaCloud\Tea\Model;

class accountLimitTypeSet extends Model
{
    /**
     * @var accountLimit[]
     */
    public $accountLimit;
    protected $_name = [
        'accountLimit' => 'AccountLimit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountLimit) {
            $res['AccountLimit'] = [];
            if (null !== $this->accountLimit && \is_array($this->accountLimit)) {
                $n = 0;
                foreach ($this->accountLimit as $item) {
                    $res['AccountLimit'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accountLimitTypeSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountLimit'])) {
            if (!empty($map['AccountLimit'])) {
                $model->accountLimit = [];
                $n                   = 0;
                foreach ($map['AccountLimit'] as $item) {
                    $model->accountLimit[$n++] = null !== $item ? accountLimit::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
