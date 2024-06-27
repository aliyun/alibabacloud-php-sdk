<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeVariableBindDetailResponseBody\resultObject;

use AlibabaCloud\Tea\Model;

class params extends Model
{
    /**
     * @var string
     */
    public $eventFieldName;

    /**
     * @var bool
     */
    public $required;

    /**
     * @var string
     */
    public $variableName;
    protected $_name = [
        'eventFieldName' => 'eventFieldName',
        'required'       => 'required',
        'variableName'   => 'variableName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventFieldName) {
            $res['eventFieldName'] = $this->eventFieldName;
        }
        if (null !== $this->required) {
            $res['required'] = $this->required;
        }
        if (null !== $this->variableName) {
            $res['variableName'] = $this->variableName;
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
        if (isset($map['eventFieldName'])) {
            $model->eventFieldName = $map['eventFieldName'];
        }
        if (isset($map['required'])) {
            $model->required = $map['required'];
        }
        if (isset($map['variableName'])) {
            $model->variableName = $map['variableName'];
        }

        return $model;
    }
}
