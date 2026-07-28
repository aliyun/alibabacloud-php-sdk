<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models\ChatAiAgentRequest;

use AlibabaCloud\Dara\Model;

class hitlDecisions extends Model
{
    /**
     * @var string
     */
    public $decision;

    /**
     * @var string
     */
    public $hitlId;
    protected $_name = [
        'decision' => 'decision',
        'hitlId' => 'hitlId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->decision) {
            $res['decision'] = $this->decision;
        }

        if (null !== $this->hitlId) {
            $res['hitlId'] = $this->hitlId;
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
        if (isset($map['decision'])) {
            $model->decision = $map['decision'];
        }

        if (isset($map['hitlId'])) {
            $model->hitlId = $map['hitlId'];
        }

        return $model;
    }
}
