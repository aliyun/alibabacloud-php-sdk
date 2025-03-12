<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyProcItemResponseBody;

use AlibabaCloud\Tea\Model;

class propertyItems extends Model
{
    /**
     * @description The number of servers on which the process runs.
     *
     * @example 8888
     *
     * @var int
     */
    public $count;

    /**
     * @description The name of the process.
     *
     * @example .ss
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'count' => 'Count',
        'name'  => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return propertyItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
