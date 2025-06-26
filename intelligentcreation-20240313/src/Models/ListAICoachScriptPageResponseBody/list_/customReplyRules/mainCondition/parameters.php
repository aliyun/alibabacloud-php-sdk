<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListAICoachScriptPageResponseBody\list_\customReplyRules\mainCondition;

use AlibabaCloud\Dara\Model;

class parameters extends Model
{
    /**
     * @var string
     */
    public $assessPoint;
    protected $_name = [
        'assessPoint' => 'assessPoint',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assessPoint) {
            $res['assessPoint'] = $this->assessPoint;
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
        if (isset($map['assessPoint'])) {
            $model->assessPoint = $map['assessPoint'];
        }

        return $model;
    }
}
