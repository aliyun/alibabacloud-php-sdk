<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeAlertsCountResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $all;

    /**
     * @var int[]
     */
    public $countMap;

    /**
     * @var int
     */
    public $high;

    /**
     * @var int
     */
    public $low;

    /**
     * @var int
     */
    public $medium;

    /**
     * @var int
     */
    public $productNum;
    protected $_name = [
        'all' => 'All',
        'countMap' => 'CountMap',
        'high' => 'High',
        'low' => 'Low',
        'medium' => 'Medium',
        'productNum' => 'ProductNum',
    ];

    public function validate()
    {
        if (\is_array($this->countMap)) {
            Model::validateArray($this->countMap);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->all) {
            $res['All'] = $this->all;
        }

        if (null !== $this->countMap) {
            if (\is_array($this->countMap)) {
                $res['CountMap'] = [];
                foreach ($this->countMap as $key1 => $value1) {
                    $res['CountMap'][$key1] = $value1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['All'])) {
            $model->all = $map['All'];
        }

        if (isset($map['CountMap'])) {
            if (!empty($map['CountMap'])) {
                $model->countMap = [];
                foreach ($map['CountMap'] as $key1 => $value1) {
                    $model->countMap[$key1] = $value1;
                }
            }
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
