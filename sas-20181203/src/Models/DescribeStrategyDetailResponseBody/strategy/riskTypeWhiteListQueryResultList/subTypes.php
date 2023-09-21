<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeStrategyDetailResponseBody\strategy\riskTypeWhiteListQueryResultList;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeStrategyDetailResponseBody\strategy\riskTypeWhiteListQueryResultList\subTypes\checkDetails;
use AlibabaCloud\Tea\Model;

class subTypes extends Model
{
    /**
     * @description The alias of the check item.
     *
     * @example Redis unauthorized access high exploit vulnerability risk
     *
     * @var string
     */
    public $alias;

    /**
     * @description The details of custom check items.
     *
     * @var checkDetails[]
     */
    public $checkDetails;

    /**
     * @description Indicates whether the sub-check item is selected. Valid values:
     *
     *   **true**: The sub-check item is selected.
     *   **false**: The sub-check item is not selected.
     *
     * @example false
     *
     * @var bool
     */
    public $on;

    /**
     * @description The type of the sub-check item.
     *
     * @example hc_exploit_redis
     *
     * @var string
     */
    public $typeName;
    protected $_name = [
        'alias'        => 'Alias',
        'checkDetails' => 'CheckDetails',
        'on'           => 'On',
        'typeName'     => 'TypeName',
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
        if (null !== $this->checkDetails) {
            $res['CheckDetails'] = [];
            if (null !== $this->checkDetails && \is_array($this->checkDetails)) {
                $n = 0;
                foreach ($this->checkDetails as $item) {
                    $res['CheckDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->on) {
            $res['On'] = $this->on;
        }
        if (null !== $this->typeName) {
            $res['TypeName'] = $this->typeName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }
        if (isset($map['CheckDetails'])) {
            if (!empty($map['CheckDetails'])) {
                $model->checkDetails = [];
                $n                   = 0;
                foreach ($map['CheckDetails'] as $item) {
                    $model->checkDetails[$n++] = null !== $item ? checkDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['On'])) {
            $model->on = $map['On'];
        }
        if (isset($map['TypeName'])) {
            $model->typeName = $map['TypeName'];
        }

        return $model;
    }
}
