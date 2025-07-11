<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSensitiveRequestsResponseBody\data;

use AlibabaCloud\Tea\Model;

class infoCount extends Model
{
    /**
     * @description The type of the sensitive data.
     *
     * @example 1001
     *
     * @var string
     */
    public $code;

    /**
     * @description The number of sensitive data entries.
     *
     * @example 23
     *
     * @var int
     */
    public $count;
    protected $_name = [
        'code' => 'Code',
        'count' => 'Count',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return infoCount
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        return $model;
    }
}
