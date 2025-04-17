<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class GetAICoachAssessmentPointRequest extends Model
{
    /**
     * @var string
     */
    public $pointId;
    protected $_name = [
        'pointId' => 'pointId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pointId) {
            $res['pointId'] = $this->pointId;
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
        if (isset($map['pointId'])) {
            $model->pointId = $map['pointId'];
        }

        return $model;
    }
}
