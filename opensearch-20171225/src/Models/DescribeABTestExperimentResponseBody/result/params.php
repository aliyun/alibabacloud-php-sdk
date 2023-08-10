<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeABTestExperimentResponseBody\result;

use AlibabaCloud\Tea\Model;

class params extends Model
{
    /**
     * @description The name of the rough sort policy.
     *
     * @example default
     *
     * @var string
     */
    public $firstFormulaName;
    protected $_name = [
        'firstFormulaName' => 'first_formula_name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->firstFormulaName) {
            $res['first_formula_name'] = $this->firstFormulaName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return params
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['first_formula_name'])) {
            $model->firstFormulaName = $map['first_formula_name'];
        }

        return $model;
    }
}
