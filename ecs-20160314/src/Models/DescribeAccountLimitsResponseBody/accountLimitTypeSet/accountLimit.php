<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeAccountLimitsResponseBody\accountLimitTypeSet;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeAccountLimitsResponseBody\accountLimitTypeSet\accountLimit\limitValueSet;
use AlibabaCloud\Tea\Model;

class accountLimit extends Model
{
    /**
     * @var string
     */
    public $limitName;

    /**
     * @var limitValueSet
     */
    public $limitValueSet;
    protected $_name = [
        'limitName'     => 'LimitName',
        'limitValueSet' => 'LimitValueSet',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->limitName) {
            $res['LimitName'] = $this->limitName;
        }
        if (null !== $this->limitValueSet) {
            $res['LimitValueSet'] = null !== $this->limitValueSet ? $this->limitValueSet->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accountLimit
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LimitName'])) {
            $model->limitName = $map['LimitName'];
        }
        if (isset($map['LimitValueSet'])) {
            $model->limitValueSet = limitValueSet::fromMap($map['LimitValueSet']);
        }

        return $model;
    }
}
