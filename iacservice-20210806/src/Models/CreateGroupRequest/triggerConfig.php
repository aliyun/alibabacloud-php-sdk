<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\CreateGroupRequest;

use AlibabaCloud\Dara\Model;

class triggerConfig extends Model
{
    /**
     * @var string
     */
    public $triggerStrategy;

    /**
     * @var string
     */
    public $triggerValue;
    protected $_name = [
        'triggerStrategy' => 'triggerStrategy',
        'triggerValue' => 'triggerValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->triggerStrategy) {
            $res['triggerStrategy'] = $this->triggerStrategy;
        }

        if (null !== $this->triggerValue) {
            $res['triggerValue'] = $this->triggerValue;
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
        if (isset($map['triggerStrategy'])) {
            $model->triggerStrategy = $map['triggerStrategy'];
        }

        if (isset($map['triggerValue'])) {
            $model->triggerValue = $map['triggerValue'];
        }

        return $model;
    }
}
