<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SubmitAICoachDebugRequest;

use AlibabaCloud\Dara\Model;

class expressiveness extends Model
{
    /**
     * @var string
     */
    public $desc;

    /**
     * @var string
     */
    public $expressivenessId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $rule;
    protected $_name = [
        'desc' => 'desc',
        'expressivenessId' => 'expressivenessId',
        'name' => 'name',
        'rule' => 'rule',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desc) {
            $res['desc'] = $this->desc;
        }

        if (null !== $this->expressivenessId) {
            $res['expressivenessId'] = $this->expressivenessId;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->rule) {
            $res['rule'] = $this->rule;
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
        if (isset($map['desc'])) {
            $model->desc = $map['desc'];
        }

        if (isset($map['expressivenessId'])) {
            $model->expressivenessId = $map['expressivenessId'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['rule'])) {
            $model->rule = $map['rule'];
        }

        return $model;
    }
}
