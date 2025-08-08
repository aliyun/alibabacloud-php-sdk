<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models\ModelSetSpec;

use AlibabaCloud\Dara\Model;

class features extends Model
{
    /**
     * @var bool
     */
    public $agentThought;

    /**
     * @var bool
     */
    public $toolCall;

    /**
     * @var bool
     */
    public $vision;
    protected $_name = [
        'agentThought' => 'agentThought',
        'toolCall' => 'toolCall',
        'vision' => 'vision',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentThought) {
            $res['agentThought'] = $this->agentThought;
        }

        if (null !== $this->toolCall) {
            $res['toolCall'] = $this->toolCall;
        }

        if (null !== $this->vision) {
            $res['vision'] = $this->vision;
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
        if (isset($map['agentThought'])) {
            $model->agentThought = $map['agentThought'];
        }

        if (isset($map['toolCall'])) {
            $model->toolCall = $map['toolCall'];
        }

        if (isset($map['vision'])) {
            $model->vision = $map['vision'];
        }

        return $model;
    }
}
