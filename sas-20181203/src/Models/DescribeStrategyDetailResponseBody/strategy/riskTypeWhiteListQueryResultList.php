<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeStrategyDetailResponseBody\strategy;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeStrategyDetailResponseBody\strategy\riskTypeWhiteListQueryResultList\subTypes;
use AlibabaCloud\Tea\Model;

class riskTypeWhiteListQueryResultList extends Model
{
    /**
     * @description The alias of the check item.
     *
     * @example Unauthorized Access
     *
     * @var string
     */
    public $alias;

    /**
     * @description Indicates whether the risk item is selected. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example false
     *
     * @var bool
     */
    public $on;

    /**
     * @description An array that consists of sub-risk items.
     *
     * @var subTypes[]
     */
    public $subTypes;

    /**
     * @description The check item.
     *
     * @example hc_exploit
     *
     * @var string
     */
    public $typeName;
    protected $_name = [
        'alias'    => 'Alias',
        'on'       => 'On',
        'subTypes' => 'SubTypes',
        'typeName' => 'TypeName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }
        if (null !== $this->on) {
            $res['On'] = $this->on;
        }
        if (null !== $this->subTypes) {
            $res['SubTypes'] = [];
            if (null !== $this->subTypes && \is_array($this->subTypes)) {
                $n = 0;
                foreach ($this->subTypes as $item) {
                    $res['SubTypes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->typeName) {
            $res['TypeName'] = $this->typeName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return riskTypeWhiteListQueryResultList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }
        if (isset($map['On'])) {
            $model->on = $map['On'];
        }
        if (isset($map['SubTypes'])) {
            if (!empty($map['SubTypes'])) {
                $model->subTypes = [];
                $n               = 0;
                foreach ($map['SubTypes'] as $item) {
                    $model->subTypes[$n++] = null !== $item ? subTypes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TypeName'])) {
            $model->typeName = $map['TypeName'];
        }

        return $model;
    }
}
