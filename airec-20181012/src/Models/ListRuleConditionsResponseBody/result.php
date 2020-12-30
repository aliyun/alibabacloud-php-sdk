<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20181012\Models\ListRuleConditionsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $selectionOperation;

    /**
     * @var string
     */
    public $selectValue;

    /**
     * @var string
     */
    public $selectType;
    protected $_name = [
        'selectionOperation' => 'SelectionOperation',
        'selectValue'        => 'SelectValue',
        'selectType'         => 'SelectType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->selectionOperation) {
            $res['SelectionOperation'] = $this->selectionOperation;
        }
        if (null !== $this->selectValue) {
            $res['SelectValue'] = $this->selectValue;
        }
        if (null !== $this->selectType) {
            $res['SelectType'] = $this->selectType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SelectionOperation'])) {
            $model->selectionOperation = $map['SelectionOperation'];
        }
        if (isset($map['SelectValue'])) {
            $model->selectValue = $map['SelectValue'];
        }
        if (isset($map['SelectType'])) {
            $model->selectType = $map['SelectType'];
        }

        return $model;
    }
}
