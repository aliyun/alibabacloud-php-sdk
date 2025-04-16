<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class GPUMetric extends Model
{
    /**
     * @var int
     */
    public $index;

    /**
     * @var string
     */
    public $model;

    /**
     * @var int
     */
    public $status;

    /**
     * @var float
     */
    public $usageRate;
    protected $_name = [
        'index' => 'Index',
        'model' => 'Model',
        'status' => 'Status',
        'usageRate' => 'UsageRate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }

        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->usageRate) {
            $res['UsageRate'] = $this->usageRate;
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
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }

        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UsageRate'])) {
            $model->usageRate = $map['UsageRate'];
        }

        return $model;
    }
}
