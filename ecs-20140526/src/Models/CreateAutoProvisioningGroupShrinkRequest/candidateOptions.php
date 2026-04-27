<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupShrinkRequest;

use AlibabaCloud\Dara\Model;

class candidateOptions extends Model
{
    /**
     * @var bool
     */
    public $evaluate;

    /**
     * @var int
     */
    public $timeoutMinutes;
    protected $_name = [
        'evaluate' => 'Evaluate',
        'timeoutMinutes' => 'TimeoutMinutes',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->evaluate) {
            $res['Evaluate'] = $this->evaluate;
        }

        if (null !== $this->timeoutMinutes) {
            $res['TimeoutMinutes'] = $this->timeoutMinutes;
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
        if (isset($map['Evaluate'])) {
            $model->evaluate = $map['Evaluate'];
        }

        if (isset($map['TimeoutMinutes'])) {
            $model->timeoutMinutes = $map['TimeoutMinutes'];
        }

        return $model;
    }
}
