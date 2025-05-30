<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yunjian\V20211217\Models;

use AlibabaCloud\Dara\Model;

class GetUrgentDemandPlanDetailRequest extends Model
{
    /**
     * @var string
     */
    public $planId;
    protected $_name = [
        'planId' => 'planId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->planId) {
            $res['planId'] = $this->planId;
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
        if (isset($map['planId'])) {
            $model->planId = $map['planId'];
        }

        return $model;
    }
}
