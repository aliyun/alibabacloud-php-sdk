<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\QueryCostCenterRuleResponseBody\filterExpression;

use AlibabaCloud\Dara\Model;

class filterValues extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $codeName;

    /**
     * @var string
     */
    public $selectType;

    /**
     * @var string[]
     */
    public $values;
    protected $_name = [
        'code' => 'Code',
        'codeName' => 'CodeName',
        'selectType' => 'SelectType',
        'values' => 'Values',
    ];

    public function validate()
    {
        if (\is_array($this->values)) {
            Model::validateArray($this->values);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->codeName) {
            $res['CodeName'] = $this->codeName;
        }

        if (null !== $this->selectType) {
            $res['SelectType'] = $this->selectType;
        }

        if (null !== $this->values) {
            if (\is_array($this->values)) {
                $res['Values'] = [];
                $n1 = 0;
                foreach ($this->values as $item1) {
                    $res['Values'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['CodeName'])) {
            $model->codeName = $map['CodeName'];
        }

        if (isset($map['SelectType'])) {
            $model->selectType = $map['SelectType'];
        }

        if (isset($map['Values'])) {
            if (!empty($map['Values'])) {
                $model->values = [];
                $n1 = 0;
                foreach ($map['Values'] as $item1) {
                    $model->values[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
