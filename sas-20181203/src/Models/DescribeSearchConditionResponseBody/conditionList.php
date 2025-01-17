<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSearchConditionResponseBody;

use AlibabaCloud\Dara\Model;

class conditionList extends Model
{
    /**
     * @var string
     */
    public $conditionType;
    /**
     * @var string
     */
    public $filterConditions;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $nameKey;
    protected $_name = [
        'conditionType'    => 'ConditionType',
        'filterConditions' => 'FilterConditions',
        'name'             => 'Name',
        'nameKey'          => 'NameKey',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conditionType) {
            $res['ConditionType'] = $this->conditionType;
        }

        if (null !== $this->filterConditions) {
            $res['FilterConditions'] = $this->filterConditions;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->nameKey) {
            $res['NameKey'] = $this->nameKey;
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
        if (isset($map['ConditionType'])) {
            $model->conditionType = $map['ConditionType'];
        }

        if (isset($map['FilterConditions'])) {
            $model->filterConditions = $map['FilterConditions'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NameKey'])) {
            $model->nameKey = $map['NameKey'];
        }

        return $model;
    }
}
