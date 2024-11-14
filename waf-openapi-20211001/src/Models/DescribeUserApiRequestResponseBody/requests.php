<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeUserApiRequestResponseBody;

use AlibabaCloud\Tea\Model;

class requests extends Model
{
    /**
     * @description The number of entries returned.
     *
     * @example 76
     *
     * @var int
     */
    public $count;

    /**
     * @description The type of the statistics. Valid values:
     *
     *   **client_list**: client
     *   **ip**: IP address
     *   **region_id** region
     *   **country_id**: country
     *
     * @example {
     * ],
     * "ip": "47.92.113.***",
     * }
     * @var string
     */
    public $value;
    protected $_name = [
        'count' => 'Count',
        'value' => 'Value',
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
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return requests
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
