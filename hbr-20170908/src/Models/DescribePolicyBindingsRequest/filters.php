<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribePolicyBindingsRequest;

use AlibabaCloud\Tea\Model;

class filters extends Model
{
    /**
     * @description Key in the query filter. Possible values include:
     *
     * - **PolicyId**: Backup policy ID
     * - **DataSourceId**: ECS instance ID
     * - **DataSourceType**: Data source type
     *
     * @example DataSourceType
     *
     * @var string
     */
    public $key;

    /**
     * @description Matching method. Default is IN. This refers to the matching operation (Operator) supported by the Key and Value in the filter. Possible values include:
     *
     * - **EQUAL**: Equal to
     * - **NOT_EQUAL**: Not equal to
     * - **GREATER_THAN**: Greater than
     * - **GREATER_THAN_OR_EQUAL**: Greater than or equal to
     * - **LESS_THAN**: Less than
     * - **LESS_THAN_OR_EQUAL**: Less than or equal to
     * - **BETWEEN**: Range, where value is a JSON array `[lower_bound, upper_bound]`.
     * - **IN**: In the set, where value is an array.
     *
     * @example IN
     *
     * @var string
     */
    public $operator;

    /**
     * @description Values to be matched in the query filter.
     *
     * @var string[]
     */
    public $values;
    protected $_name = [
        'key' => 'Key',
        'operator' => 'Operator',
        'values' => 'Values',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->values) {
            $res['Values'] = $this->values;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return filters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['Values'])) {
            if (!empty($map['Values'])) {
                $model->values = $map['Values'];
            }
        }

        return $model;
    }
}
