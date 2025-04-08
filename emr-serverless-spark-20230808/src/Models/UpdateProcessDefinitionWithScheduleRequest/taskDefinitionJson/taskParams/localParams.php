<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\UpdateProcessDefinitionWithScheduleRequest\taskDefinitionJson\taskParams;

use AlibabaCloud\Dara\Model;

class localParams extends Model
{
    /**
     * @var string
     */
    public $direct;

    /**
     * @var string
     */
    public $prop;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'direct' => 'direct',
        'prop' => 'prop',
        'type' => 'type',
        'value' => 'value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->direct) {
            $res['direct'] = $this->direct;
        }

        if (null !== $this->prop) {
            $res['prop'] = $this->prop;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->value) {
            $res['value'] = $this->value;
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
        if (isset($map['direct'])) {
            $model->direct = $map['direct'];
        }

        if (isset($map['prop'])) {
            $model->prop = $map['prop'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
