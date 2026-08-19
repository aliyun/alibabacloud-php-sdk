<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AccountLabel\V20200315\Models\QueryCustomerLabelByConfigGroupResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $labelSeries;
    protected $_name = [
        'label' => 'Label',
        'labelSeries' => 'LabelSeries',
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

        if (null !== $this->labelSeries) {
            $res['LabelSeries'] = $this->labelSeries;
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

        if (isset($map['LabelSeries'])) {
            $model->labelSeries = $map['LabelSeries'];
        }

        return $model;
    }
}
