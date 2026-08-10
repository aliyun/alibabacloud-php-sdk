<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models\SendNapalStreamMessageResponseBody\taskStatusUpdate;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Nis\V20211216\Models\SendNapalStreamMessageResponseBody\taskStatusUpdate\metadata\step;

class metadata extends Model
{
    /**
     * @var step
     */
    public $step;
    protected $_name = [
        'step' => 'Step',
    ];

    public function validate()
    {
        if (null !== $this->step) {
            $this->step->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->step) {
            $res['Step'] = null !== $this->step ? $this->step->toArray($noStream) : $this->step;
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
        if (isset($map['Step'])) {
            $model->step = step::fromMap($map['Step']);
        }

        return $model;
    }
}
