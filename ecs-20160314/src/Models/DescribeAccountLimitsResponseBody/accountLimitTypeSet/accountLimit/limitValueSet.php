<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeAccountLimitsResponseBody\accountLimitTypeSet\accountLimit;

use AlibabaCloud\Tea\Model;

class limitValueSet extends Model
{
    /**
     * @var string[]
     */
    public $limitValue;
    protected $_name = [
        'limitValue' => 'LimitValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->limitValue) {
            $res['LimitValue'] = $this->limitValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return limitValueSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LimitValue'])) {
            if (!empty($map['LimitValue'])) {
                $model->limitValue = $map['LimitValue'];
            }
        }

        return $model;
    }
}
