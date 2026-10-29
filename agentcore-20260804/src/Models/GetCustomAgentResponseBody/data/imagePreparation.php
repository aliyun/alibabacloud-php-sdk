<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\GetCustomAgentResponseBody\data;

use AlibabaCloud\Dara\Model;

class imagePreparation extends Model
{
    /**
     * @var string
     */
    public $phase;

    /**
     * @var string
     */
    public $preparationId;
    protected $_name = [
        'phase' => 'phase',
        'preparationId' => 'preparationId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->phase) {
            $res['phase'] = $this->phase;
        }

        if (null !== $this->preparationId) {
            $res['preparationId'] = $this->preparationId;
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
        if (isset($map['phase'])) {
            $model->phase = $map['phase'];
        }

        if (isset($map['preparationId'])) {
            $model->preparationId = $map['preparationId'];
        }

        return $model;
    }
}
