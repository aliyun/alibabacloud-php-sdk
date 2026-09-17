<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ReplyAgentSessionRequest\params;

use AlibabaCloud\Dara\Model;

class outcome extends Model
{
    /**
     * @var string
     */
    public $optionId;

    /**
     * @var string
     */
    public $outcome;
    protected $_name = [
        'optionId' => 'OptionId',
        'outcome' => 'Outcome',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->optionId) {
            $res['OptionId'] = $this->optionId;
        }

        if (null !== $this->outcome) {
            $res['Outcome'] = $this->outcome;
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
        if (isset($map['OptionId'])) {
            $model->optionId = $map['OptionId'];
        }

        if (isset($map['Outcome'])) {
            $model->outcome = $map['Outcome'];
        }

        return $model;
    }
}
