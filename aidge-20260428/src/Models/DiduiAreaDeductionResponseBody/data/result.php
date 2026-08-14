<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\DiduiAreaDeductionResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aidge\V20260428\Models\DiduiAreaDeductionResponseBody\data\result\stage4AreaLabel;

class result extends Model
{
    /**
     * @var stage4AreaLabel
     */
    public $stage4AreaLabel;
    protected $_name = [
        'stage4AreaLabel' => 'Stage4AreaLabel',
    ];

    public function validate()
    {
        if (null !== $this->stage4AreaLabel) {
            $this->stage4AreaLabel->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->stage4AreaLabel) {
            $res['Stage4AreaLabel'] = null !== $this->stage4AreaLabel ? $this->stage4AreaLabel->toArray($noStream) : $this->stage4AreaLabel;
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
        if (isset($map['Stage4AreaLabel'])) {
            $model->stage4AreaLabel = stage4AreaLabel::fromMap($map['Stage4AreaLabel']);
        }

        return $model;
    }
}
