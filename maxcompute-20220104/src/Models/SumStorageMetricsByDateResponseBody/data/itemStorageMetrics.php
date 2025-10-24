<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\SumStorageMetricsByDateResponseBody\data;

use AlibabaCloud\Dara\Model;

class itemStorageMetrics extends Model
{
    /**
     * @var string
     */
    public $itemName;

    /**
     * @var float
     */
    public $percentage;

    /**
     * @var string
     */
    public $usage;
    protected $_name = [
        'itemName' => 'itemName',
        'percentage' => 'percentage',
        'usage' => 'usage',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
