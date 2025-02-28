<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class StopJobRequestBody extends Model
{
    /**
     * @var string
     */
    public $stopStrategy;
    protected $_name = [
        'stopStrategy' => 'stopStrategy',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->stopStrategy) {
            $res['stopStrategy'] = $this->stopStrategy;
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
        if (isset($map['stopStrategy'])) {
            $model->stopStrategy = $map['stopStrategy'];
        }

        return $model;
    }
}
