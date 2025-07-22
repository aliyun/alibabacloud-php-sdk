<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\ModifyCostCenterRuleRequest\filterExpression;

use AlibabaCloud\Tea\Model;

class filterValues extends Model
{
    /**
     * @example TAG-test-xxx-key
     *
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $codeName;

    /**
     * @example IN
     *
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

    public function validate() {}

    public function toMap()
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
            $res['Values'] = $this->values;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return filterValues
     */
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
                $model->values = $map['Values'];
            }
        }

        return $model;
    }
}
