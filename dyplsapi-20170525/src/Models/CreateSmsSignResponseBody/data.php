<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreateSmsSignResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $calledNoSign;
    protected $_name = [
        'calledNoSign' => 'CalledNoSign',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->calledNoSign) {
            $res['CalledNoSign'] = $this->calledNoSign;
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
        if (isset($map['CalledNoSign'])) {
            $model->calledNoSign = $map['CalledNoSign'];
        }

        return $model;
    }
}
