<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachScriptResponseBody\customReplyRules\mainCondition;

use AlibabaCloud\Dara\Model;

class parameters extends Model
{
    /**
     * @var string
     */
    public $assessPointId;
    protected $_name = [
        'assessPointId' => 'assessPointId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assessPointId) {
            $res['assessPointId'] = $this->assessPointId;
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
        if (isset($map['assessPointId'])) {
            $model->assessPointId = $map['assessPointId'];
        }

        return $model;
    }
}
