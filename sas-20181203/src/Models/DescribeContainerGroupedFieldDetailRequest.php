<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeContainerGroupedFieldDetailRequest extends Model
{
    /**
     * @var string
     */
    public $criteria;

    /**
     * @var string
     */
    public $groupField;
    protected $_name = [
        'criteria' => 'Criteria',
        'groupField' => 'GroupField',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->criteria) {
            $res['Criteria'] = $this->criteria;
        }

        if (null !== $this->groupField) {
            $res['GroupField'] = $this->groupField;
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
        if (isset($map['Criteria'])) {
            $model->criteria = $map['Criteria'];
        }

        if (isset($map['GroupField'])) {
            $model->groupField = $map['GroupField'];
        }

        return $model;
    }
}
