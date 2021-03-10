<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ListAnalyticsDataRequest;

use AlibabaCloud\Tea\Model;

class condition extends Model
{
    /**
     * @var string
     */
    public $fieldName;

    /**
     * @var string
     */
    public $operate;

    /**
     * @var string
     */
    public $value;

    /**
     * @var string
     */
    public $betweenStart;

    /**
     * @var string
     */
    public $betweenEnd;
    protected $_name = [
        'fieldName'    => 'FieldName',
        'operate'      => 'Operate',
        'value'        => 'Value',
        'betweenStart' => 'BetweenStart',
        'betweenEnd'   => 'BetweenEnd',
    ];

    public function validate()
    {
        Model::validateRequired('fieldName', $this->fieldName, true);
        Model::validateRequired('operate', $this->operate, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fieldName) {
            $res['FieldName'] = $this->fieldName;
        }
        if (null !== $this->operate) {
            $res['Operate'] = $this->operate;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->betweenStart) {
            $res['BetweenStart'] = $this->betweenStart;
        }
        if (null !== $this->betweenEnd) {
            $res['BetweenEnd'] = $this->betweenEnd;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return condition
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FieldName'])) {
            $model->fieldName = $map['FieldName'];
        }
        if (isset($map['Operate'])) {
            $model->operate = $map['Operate'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['BetweenStart'])) {
            $model->betweenStart = $map['BetweenStart'];
        }
        if (isset($map['BetweenEnd'])) {
            $model->betweenEnd = $map['BetweenEnd'];
        }

        return $model;
    }
}
