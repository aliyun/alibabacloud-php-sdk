<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\UpdateUserRequest;

use AlibabaCloud\Dara\Model;

class user extends Model
{
    /**
     * @var bool
     */
    public $enableEventbridge;
    protected $_name = [
        'enableEventbridge' => 'EnableEventbridge',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableEventbridge) {
            $res['EnableEventbridge'] = $this->enableEventbridge;
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
        if (isset($map['EnableEventbridge'])) {
            $model->enableEventbridge = $map['EnableEventbridge'];
        }

        return $model;
    }
}
