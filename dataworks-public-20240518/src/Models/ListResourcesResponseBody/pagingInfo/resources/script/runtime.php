<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListResourcesResponseBody\pagingInfo\resources\script;

use AlibabaCloud\Dara\Model;

class runtime extends Model
{
    /**
     * @var string
     */
    public $command;
    protected $_name = [
        'command' => 'Command',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->command) {
            $res['Command'] = $this->command;
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
        if (isset($map['Command'])) {
            $model->command = $map['Command'];
        }

        return $model;
    }
}
