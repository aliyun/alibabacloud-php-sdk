<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\AddPermissionRequest;

use AlibabaCloud\Dara\Model;

class option extends Model
{
    /**
     * @var int
     */
    public $duration;
    protected $_name = [
        'duration' => 'Duration',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
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
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        return $model;
    }
}
