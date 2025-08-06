<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetEventResponseBody;

use AlibabaCloud\Dara\Model;

class originStart extends Model
{
    /**
     * @var string
     */
    public $dateTime;
    protected $_name = [
        'dateTime' => 'DateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dateTime) {
            $res['DateTime'] = $this->dateTime;
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
        if (isset($map['DateTime'])) {
            $model->dateTime = $map['DateTime'];
        }

        return $model;
    }
}
