<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\EntityDiscoverRule;

use AlibabaCloud\Tea\Model;

class fieldRules extends Model
{
    /**
     * @var string
     */
    public $fieldKey;

    /**
     * @var string[]
     */
    public $fieldValues;

    /**
     * @var string
     */
    public $op;
    protected $_name = [
        'fieldKey' => 'fieldKey',
        'fieldValues' => 'fieldValues',
        'op' => 'op',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fieldKey) {
            $res['fieldKey'] = $this->fieldKey;
        }
        if (null !== $this->fieldValues) {
            $res['fieldValues'] = $this->fieldValues;
        }
        if (null !== $this->op) {
            $res['op'] = $this->op;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fieldRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['fieldKey'])) {
            $model->fieldKey = $map['fieldKey'];
        }
        if (isset($map['fieldValues'])) {
            if (!empty($map['fieldValues'])) {
                $model->fieldValues = $map['fieldValues'];
            }
        }
        if (isset($map['op'])) {
            $model->op = $map['op'];
        }

        return $model;
    }
}
