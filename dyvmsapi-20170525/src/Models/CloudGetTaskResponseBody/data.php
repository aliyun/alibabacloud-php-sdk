<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudGetTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudGetTaskResponseBody\data\taskProperty;

class data extends Model
{
    /**
     * @var taskProperty
     */
    public $taskProperty;
    protected $_name = [
        'taskProperty' => 'TaskProperty',
    ];

    public function validate()
    {
        if (null !== $this->taskProperty) {
            $this->taskProperty->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->taskProperty) {
            $res['TaskProperty'] = null !== $this->taskProperty ? $this->taskProperty->toArray($noStream) : $this->taskProperty;
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
        if (isset($map['TaskProperty'])) {
            $model->taskProperty = taskProperty::fromMap($map['TaskProperty']);
        }

        return $model;
    }
}
