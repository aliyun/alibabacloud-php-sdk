<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListAICoachScriptPageResponseBody\list_\customReplyRules\action;

use AlibabaCloud\Dara\Model;

class parameters extends Model
{
    /**
     * @var string
     */
    public $assessPoint;

    /**
     * @var string
     */
    public $customContent;
    protected $_name = [
        'assessPoint' => 'assessPoint',
        'customContent' => 'customContent',
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

        if (null !== $this->customContent) {
            $res['customContent'] = $this->customContent;
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

        if (isset($map['customContent'])) {
            $model->customContent = $map['customContent'];
        }

        return $model;
    }
}
