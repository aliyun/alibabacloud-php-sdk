<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avds\V20171129\Models\DescribeTaskBriefInfoResponseBody;

use AlibabaCloud\Tea\Model;

class risksFacets extends Model
{
    /**
     * @var int
     */
    public $medium;

    /**
     * @var int
     */
    public $low;

    /**
     * @var int
     */
    public $total;

    /**
     * @var int
     */
    public $high;

    /**
     * @var int
     */
    public $info;
    protected $_name = [
        'medium' => 'Medium',
        'low'    => 'Low',
        'total'  => 'Total',
        'high'   => 'High',
        'info'   => 'Info',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->medium) {
            $res['Medium'] = $this->medium;
        }
        if (null !== $this->low) {
            $res['Low'] = $this->low;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->high) {
            $res['High'] = $this->high;
        }
        if (null !== $this->info) {
            $res['Info'] = $this->info;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return risksFacets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Medium'])) {
            $model->medium = $map['Medium'];
        }
        if (isset($map['Low'])) {
            $model->low = $map['Low'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['High'])) {
            $model->high = $map['High'];
        }
        if (isset($map['Info'])) {
            $model->info = $map['Info'];
        }

        return $model;
    }
}
