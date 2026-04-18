<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\QueryHistoryMetricDistributionResponseBody;

use AlibabaCloud\Dara\Model;

class distributionList extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $label;

    /**
     * @var float
     */
    public $max;

    /**
     * @var float
     */
    public $min;
    protected $_name = [
        'count' => 'Count',
        'label' => 'Label',
        'max' => 'Max',
        'min' => 'Min',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }

        if (null !== $this->max) {
            $res['Max'] = $this->max;
        }

        if (null !== $this->min) {
            $res['Min'] = $this->min;
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

        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }

        if (isset($map['Max'])) {
            $model->max = $map['Max'];
        }

        if (isset($map['Min'])) {
            $model->min = $map['Min'];
        }

        return $model;
    }
}
