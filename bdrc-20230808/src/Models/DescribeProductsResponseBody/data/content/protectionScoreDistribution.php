<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BDRC\V20230808\Models\DescribeProductsResponseBody\data\content;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BDRC\V20230808\Models\DescribeProductsResponseBody\data\content\protectionScoreDistribution\range;

class protectionScoreDistribution extends Model
{
    /**
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
        if (null !== $this->range) {
            $this->range->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->range) {
            $res['Range'] = null !== $this->range ? $this->range->toArray($noStream) : $this->range;
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['Range'])) {
            $model->range = range::fromMap($map['Range']);
        }

        return $model;
    }
}
