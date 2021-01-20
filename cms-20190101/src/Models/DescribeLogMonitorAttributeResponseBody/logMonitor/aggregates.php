<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeLogMonitorAttributeResponseBody\logMonitor;

use AlibabaCloud\Tea\Model;

class aggregates extends Model
{
    /**
     * @var string
     */
    public $max;

    /**
     * @var string
     */
    public $fieldName;

    /**
     * @var string
     */
    public $min;

    /**
     * @var string
     */
    public $function;

    /**
     * @var string
     */
    public $alias;
    protected $_name = [
        'max'       => 'Max',
        'fieldName' => 'FieldName',
        'min'       => 'Min',
        'function'  => 'Function',
        'alias'     => 'Alias',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->max) {
            $res['Max'] = $this->max;
        }
        if (null !== $this->fieldName) {
            $res['FieldName'] = $this->fieldName;
        }
        if (null !== $this->min) {
            $res['Min'] = $this->min;
        }
        if (null !== $this->function) {
            $res['Function'] = $this->function;
        }
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return aggregates
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Max'])) {
            $model->max = $map['Max'];
        }
        if (isset($map['FieldName'])) {
            $model->fieldName = $map['FieldName'];
        }
        if (isset($map['Min'])) {
            $model->min = $map['Min'];
        }
        if (isset($map['Function'])) {
            $model->function = $map['Function'];
        }
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }

        return $model;
    }
}
