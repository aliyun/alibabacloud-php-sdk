<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BDRC\V20230808\Models\DescribeProductsResponseBody\data\content\protectionScoreDistribution;

use AlibabaCloud\Tea\Model;

class range extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $from;

    /**
     * @example 60
     *
     * @var int
     */
    public $to;
    protected $_name = [
        'from' => 'From',
        'to'   => 'To',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->to) {
            $res['To'] = $this->to;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return range
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['To'])) {
            $model->to = $map['To'];
        }

        return $model;
    }
}
