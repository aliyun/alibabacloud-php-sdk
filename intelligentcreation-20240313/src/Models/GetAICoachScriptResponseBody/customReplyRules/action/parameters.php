<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachScriptResponseBody\customReplyRules\action;

use AlibabaCloud\Dara\Model;

class parameters extends Model
{
    /**
     * @var string
     */
    public $assessPointId;

    /**
     * @var string
     */
    public $customContent;
    protected $_name = [
        'assessPointId' => 'assessPointId',
        'customContent' => 'customContent',
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
        if (isset($map['assessPointId'])) {
            $model->assessPointId = $map['assessPointId'];
        }

        if (isset($map['customContent'])) {
            $model->customContent = $map['customContent'];
        }

        return $model;
    }
}
