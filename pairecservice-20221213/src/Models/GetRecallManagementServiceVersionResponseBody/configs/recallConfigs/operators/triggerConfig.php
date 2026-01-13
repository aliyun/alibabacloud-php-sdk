<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetRecallManagementServiceVersionResponseBody\configs\recallConfigs\operators;

use AlibabaCloud\Dara\Model;

class triggerConfig extends Model
{
    /**
     * @var string
     */
    public $field;

    /**
     * @var string
     */
    public $fieldQuantityLimit;

    /**
     * @var string
     */
    public $isRandSort;

    /**
     * @var string
     */
    public $sortField;
    protected $_name = [
        'field' => 'Field',
        'fieldQuantityLimit' => 'FieldQuantityLimit',
        'isRandSort' => 'IsRandSort',
        'sortField' => 'SortField',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->field) {
            $res['Field'] = $this->field;
        }

        if (null !== $this->fieldQuantityLimit) {
            $res['FieldQuantityLimit'] = $this->fieldQuantityLimit;
        }

        if (null !== $this->isRandSort) {
            $res['IsRandSort'] = $this->isRandSort;
        }

        if (null !== $this->sortField) {
            $res['SortField'] = $this->sortField;
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
        if (isset($map['Field'])) {
            $model->field = $map['Field'];
        }

        if (isset($map['FieldQuantityLimit'])) {
            $model->fieldQuantityLimit = $map['FieldQuantityLimit'];
        }

        if (isset($map['IsRandSort'])) {
            $model->isRandSort = $map['IsRandSort'];
        }

        if (isset($map['SortField'])) {
            $model->sortField = $map['SortField'];
        }

        return $model;
    }
}
