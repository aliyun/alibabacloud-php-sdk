<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetDeliveryTaskResponseBody\deliveryTask;

class GetDeliveryTaskResponseBody extends Model
{
    /**
     * @var deliveryTask
     */
    public $deliveryTask;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'deliveryTask' => 'deliveryTask',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (null !== $this->deliveryTask) {
            $this->deliveryTask->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deliveryTask) {
            $res['deliveryTask'] = null !== $this->deliveryTask ? $this->deliveryTask->toArray($noStream) : $this->deliveryTask;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['deliveryTask'])) {
            $model->deliveryTask = deliveryTask::fromMap($map['deliveryTask']);
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
