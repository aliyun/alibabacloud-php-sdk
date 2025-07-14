<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeSwimmingLaneResponseBody\data\appEntryRule;

use AlibabaCloud\Tea\Model;

class conditions extends Model
{
    /**
     * @example ==
     *
     * @var string
     */
    public $condition;

    /**
     * @example t
     *
     * @var string
     */
    public $name;

    /**
     * @example Header
     *
     * @var string
     */
    public $type;

    /**
     * @example g1
     *
     * @var string
     */
    public $value;

    /**
     * @var string[]
     */
    public $values;
    protected $_name = [
        'condition' => 'Condition',
        'name' => 'Name',
        'type' => 'Type',
        'value' => 'Value',
        'values' => 'Values',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->condition) {
            $res['Condition'] = $this->condition;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->values) {
            $res['Values'] = $this->values;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return conditions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Condition'])) {
            $model->condition = $map['Condition'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['Values'])) {
            if (!empty($map['Values'])) {
                $model->values = $map['Values'];
            }
        }

        return $model;
    }
}
