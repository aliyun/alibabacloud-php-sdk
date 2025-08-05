<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\SumStorageMetricsByDateResponseBody\data;

use AlibabaCloud\Tea\Model;

class itemStorageMetrics extends Model
{
    /**
     * @example prj
     *
     * @var string
     */
    public $itemName;

    /**
     * @example 91.22
     *
     * @var float
     */
    public $percentage;

    /**
     * @example 300.560392
     *
     * @var string
     */
    public $usage;
    protected $_name = [
        'itemName' => 'itemName',
        'percentage' => 'percentage',
        'usage' => 'usage',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->itemName) {
            $res['itemName'] = $this->itemName;
        }
        if (null !== $this->percentage) {
            $res['percentage'] = $this->percentage;
        }
        if (null !== $this->usage) {
            $res['usage'] = $this->usage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return itemStorageMetrics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['itemName'])) {
            $model->itemName = $map['itemName'];
        }
        if (isset($map['percentage'])) {
            $model->percentage = $map['percentage'];
        }
        if (isset($map['usage'])) {
            $model->usage = $map['usage'];
        }

        return $model;
    }
}
