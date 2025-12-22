<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeABTestExperimentResponseBody\result;

use AlibabaCloud\Dara\Model;

class params extends Model
{
    /**
     * @var string
     */
    public $firstFormulaName;
    protected $_name = [
        'firstFormulaName' => 'first_formula_name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->firstFormulaName) {
            $res['first_formula_name'] = $this->firstFormulaName;
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
        if (isset($map['first_formula_name'])) {
            $model->firstFormulaName = $map['first_formula_name'];
        }

        return $model;
    }
}
