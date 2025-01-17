<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class FinishGuidTaskRequest extends Model
{
    /**
     * @var string
     */
    public $taskTypeName;
    protected $_name = [
        'taskTypeName' => 'TaskTypeName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->taskTypeName) {
            $res['TaskTypeName'] = $this->taskTypeName;
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
        if (isset($map['TaskTypeName'])) {
            $model->taskTypeName = $map['TaskTypeName'];
        }

        return $model;
    }
}
