<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;

class DeleteConfigResponseBody extends Model
{
    /**
     * @var int
     */
    public $deleted;

    /**
     * @var string
     */
    public $message;
    protected $_name = [
        'deleted' => 'deleted',
        'message' => 'message',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deleted) {
            $res['deleted'] = $this->deleted;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
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
        if (isset($map['deleted'])) {
            $model->deleted = $map['deleted'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        return $model;
    }
}
