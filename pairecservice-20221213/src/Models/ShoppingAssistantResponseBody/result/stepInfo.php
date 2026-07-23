<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\ShoppingAssistantResponseBody\result;

use AlibabaCloud\Dara\Model;

class stepInfo extends Model
{
    /**
     * @var string
     */
    public $step;
    protected $_name = [
        'step' => 'Step',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->step) {
            $res['Step'] = $this->step;
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
            $model->step = $map['Step'];
        }

        return $model;
    }
}
