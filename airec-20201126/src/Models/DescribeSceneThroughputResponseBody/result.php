<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\DescribeSceneThroughputResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The number of page views.
     *
     * @example 123213
     *
     * @var int
     */
    public $pvCount;
    protected $_name = [
        'pvCount' => 'pvCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pvCount) {
            $res['pvCount'] = $this->pvCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['pvCount'])) {
            $model->pvCount = $map['pvCount'];
        }

        return $model;
    }
}
