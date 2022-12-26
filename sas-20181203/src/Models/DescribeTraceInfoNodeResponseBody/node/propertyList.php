<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeTraceInfoNodeResponseBody\node;

use AlibabaCloud\Tea\Model;

class propertyList extends Model
{
    /**
     * @example Incident
     *
     * @var string
     */
    public $name;

    /**
     * @example Alert
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'name'  => 'Name',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return propertyList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
