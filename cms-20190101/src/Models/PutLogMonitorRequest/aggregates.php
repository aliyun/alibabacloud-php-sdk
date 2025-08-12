<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PutLogMonitorRequest;

use AlibabaCloud\Dara\Model;

class aggregates extends Model
{
    /**
     * @var string
     */
    public $alias;

    /**
     * @var string
     */
    public $fieldName;

    /**
     * @var string
     */
    public $function;
    protected $_name = [
        'alias' => 'Alias',
        'fieldName' => 'FieldName',
        'function' => 'Function',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }

        if (null !== $this->fieldName) {
            $res['FieldName'] = $this->fieldName;
        }

        if (null !== $this->function) {
            $res['Function'] = $this->function;
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
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }

        if (isset($map['FieldName'])) {
            $model->fieldName = $map['FieldName'];
        }

        if (isset($map['Function'])) {
            $model->function = $map['Function'];
        }

        return $model;
    }
}
