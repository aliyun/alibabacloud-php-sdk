<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BDRC\V20230808\Models\DescribeProductsResponseBody\data\content;

use AlibabaCloud\SDK\BDRC\V20230808\Models\DescribeProductsResponseBody\data\content\protectionScoreDistribution\range;
use AlibabaCloud\Tea\Model;

class protectionScoreDistribution extends Model
{
    /**
     * @example 5
     *
     * @var int
     */
    public $count;

    /**
     * @var range
     */
    public $range;
    protected $_name = [
        'count' => 'Count',
        'range' => 'Range',
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
        if (null !== $this->range) {
            $res['Range'] = null !== $this->range ? $this->range->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return protectionScoreDistribution
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Range'])) {
            $model->range = range::fromMap($map['Range']);
        }

        return $model;
    }
}
