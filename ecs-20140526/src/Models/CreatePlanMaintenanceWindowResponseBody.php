<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;

class CreatePlanMaintenanceWindowResponseBody extends Model
{
    /**
     * @var string
     */
    public $planWindowId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'planWindowId' => 'PlanWindowId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->planWindowId) {
            $res['PlanWindowId'] = $this->planWindowId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['PlanWindowId'])) {
            $model->planWindowId = $map['PlanWindowId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
