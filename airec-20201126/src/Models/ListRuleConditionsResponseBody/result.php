<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\ListRuleConditionsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example QUERY_ITEM_TYPE
     *
     * @var string
     */
    public $selectType;

    /**
     * @example xxx
     *
     * @var string
     */
    public $selectValue;

    /**
     * @example QUERY_VALUE_IN
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
     * @return result
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
