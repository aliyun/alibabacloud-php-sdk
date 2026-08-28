<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateManagedAgentRequest\body;

use AlibabaCloud\Dara\Model;

class subAgents extends Model
{
    /**
     * @var string
     */
    public $instruction;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'instruction' => 'instruction',
        'name' => 'name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instruction) {
            $res['instruction'] = $this->instruction;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (isset($map['instruction'])) {
            $model->instruction = $map['instruction'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
