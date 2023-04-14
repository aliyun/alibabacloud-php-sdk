<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\ModifyFlowControlTaskRequest;

use AlibabaCloud\Tea\Model;

class selectionParams extends Model
{
    /**
     * @example invalidItem
     *
     * @var string
     */
    public $selectType;

    /**
     * @example 20
     *
     * @var string
     */
    public $selectValue;

    /**
     * @example OPERATOR_HIGHER
     *
     * @var string
     */
    public $selectionOperation;
    protected $_name = [
        'selectType'         => 'selectType',
        'selectValue'        => 'selectValue',
        'selectionOperation' => 'selectionOperation',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->selectType) {
            $res['selectType'] = $this->selectType;
        }
        if (null !== $this->selectValue) {
            $res['selectValue'] = $this->selectValue;
        }
        if (null !== $this->selectionOperation) {
            $res['selectionOperation'] = $this->selectionOperation;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return selectionParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['selectType'])) {
            $model->selectType = $map['selectType'];
        }
        if (isset($map['selectValue'])) {
            $model->selectValue = $map['selectValue'];
        }
        if (isset($map['selectionOperation'])) {
            $model->selectionOperation = $map['selectionOperation'];
        }

        return $model;
    }
}
