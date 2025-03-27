<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class ListPipelinesRequest extends Model
{
    /**
     * @var string
     */
    public $speed;
    protected $_name = [
        'speed' => 'Speed',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->speed) {
            $res['Speed'] = $this->speed;
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
        if (isset($map['Speed'])) {
            $model->speed = $map['Speed'];
        }

        return $model;
    }
}
