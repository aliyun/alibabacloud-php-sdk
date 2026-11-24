<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\SessionUpdated\session\output\audio;

use AlibabaCloud\Dara\Model;

class voice extends Model
{
    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'mode' => 'mode',
        'id' => 'id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mode) {
            $res['mode'] = $this->mode;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
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
        if (isset($map['mode'])) {
            $model->mode = $map['mode'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        return $model;
    }
}
