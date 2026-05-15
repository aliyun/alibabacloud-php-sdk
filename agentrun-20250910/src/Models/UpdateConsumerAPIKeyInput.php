<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class UpdateConsumerAPIKeyInput extends Model
{
    /**
     * @var bool
     */
    public $active;

    /**
     * @var string
     */
    public $description;
    protected $_name = [
        'active' => 'active',
        'description' => 'description',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->active) {
            $res['active'] = $this->active;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
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
        if (isset($map['active'])) {
            $model->active = $map['active'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        return $model;
    }
}
