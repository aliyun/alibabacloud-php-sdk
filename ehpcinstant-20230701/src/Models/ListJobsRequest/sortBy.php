<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListJobsRequest;

use AlibabaCloud\Dara\Model;

class sortBy extends Model
{
    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $order;
    protected $_name = [
        'label' => 'Label',
        'order' => 'Order',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }

        if (null !== $this->order) {
            $res['Order'] = $this->order;
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
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }

        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }

        return $model;
    }
}
