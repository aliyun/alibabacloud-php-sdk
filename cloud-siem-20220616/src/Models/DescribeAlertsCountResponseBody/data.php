<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeAlertsCountResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 75
     *
     * @var int
     */
    public $all;

    /**
     * @example 25
     *
     * @var int
     */
    public $high;

    /**
     * @example 25
     *
     * @var int
     */
    public $low;

    /**
     * @example 25
     *
     * @var int
     */
    public $medium;

    /**
     * @example 3
     *
     * @var int
     */
    public $productNum;
    protected $_name = [
        'all'        => 'All',
        'high'       => 'High',
        'low'        => 'Low',
        'medium'     => 'Medium',
        'productNum' => 'ProductNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->all) {
            $res['All'] = $this->all;
        }
        if (null !== $this->high) {
            $res['High'] = $this->high;
        }
        if (null !== $this->low) {
            $res['Low'] = $this->low;
        }
        if (null !== $this->medium) {
            $res['Medium'] = $this->medium;
        }
        if (null !== $this->productNum) {
            $res['ProductNum'] = $this->productNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['All'])) {
            $model->all = $map['All'];
        }
        if (isset($map['High'])) {
            $model->high = $map['High'];
        }
        if (isset($map['Low'])) {
            $model->low = $map['Low'];
        }
        if (isset($map['Medium'])) {
            $model->medium = $map['Medium'];
        }
        if (isset($map['ProductNum'])) {
            $model->productNum = $map['ProductNum'];
        }

        return $model;
    }
}
