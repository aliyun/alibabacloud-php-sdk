<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\SimpleQueryRequest;

use AlibabaCloud\Tea\Model;

class aggregations extends Model
{
    /**
     * @description The name of the field. For more information about supported fields, see [Supported fields and operators](https://help.aliyun.com/document_detail/2743991.html).
     *
     * @example Size
     *
     * @var string
     */
    public $field;

    /**
     * @description The operator.
     *
     * Enumerated values:
     *
     *   average: calculates the average number.
     *   min: finds the minimum value.
     *   max: finds the maximum value.
     *   count: counts the number of results.
     *   distinct: counts the number of distinct results.
     *   sum: calculates the sum of all matching results..
     *   group: counts the number of results by group. The results are sorted by the count number in descending order.
     *
     * @example sum
     *
     * @var string
     */
    public $operation;
    protected $_name = [
        'field'     => 'Field',
        'operation' => 'Operation',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->field) {
            $res['Field'] = $this->field;
        }
        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return aggregations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Field'])) {
            $model->field = $map['Field'];
        }
        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
        }

        return $model;
    }
}
