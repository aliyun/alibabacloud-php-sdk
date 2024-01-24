<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\ValidateShardTaskResponseBody;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description Indicates the name of a check item.
     *
     * @example same_schema
     *
     * @var string
     */
    public $item;

    /**
     * @description Indicates the result of the check item. Valid values:
     *
     *   **0**: indicates the task is valid.
     *   **1**: indicates the task is invalid.
     *
     * @example 0
     *
     * @var int
     */
    public $result;
    protected $_name = [
        'item'   => 'Item',
        'result' => 'Result',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->item) {
            $res['Item'] = $this->item;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Item'])) {
            $model->item = $map['Item'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        return $model;
    }
}
