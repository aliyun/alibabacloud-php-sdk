<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models;

use AlibabaCloud\Dara\Model;

class DeleteActionPlanRequest extends Model
{
    /**
     * @var string
     */
    public $actionPlanId;
    protected $_name = [
        'actionPlanId' => 'ActionPlanId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionPlanId) {
            $res['ActionPlanId'] = $this->actionPlanId;
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
        if (isset($map['ActionPlanId'])) {
            $model->actionPlanId = $map['ActionPlanId'];
        }

        return $model;
    }
}
