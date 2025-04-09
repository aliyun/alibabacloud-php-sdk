<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListSchedulerInstancesResponseBody;

use AlibabaCloud\Dara\Model;

class schedulerInstances extends Model
{
    /**
     * @var string
     */
    public $baseStrategy;

    /**
     * @var string
     */
    public $business;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $maxConcurrency;

    /**
     * @var string
     */
    public $ownerId;
    protected $_name = [
        'baseStrategy' => 'BaseStrategy',
        'business' => 'Business',
        'instanceId' => 'InstanceId',
        'maxConcurrency' => 'MaxConcurrency',
        'ownerId' => 'OwnerId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baseStrategy) {
            $res['BaseStrategy'] = $this->baseStrategy;
        }

        if (null !== $this->business) {
            $res['Business'] = $this->business;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->maxConcurrency) {
            $res['MaxConcurrency'] = $this->maxConcurrency;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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
        if (isset($map['BaseStrategy'])) {
            $model->baseStrategy = $map['BaseStrategy'];
        }

        if (isset($map['Business'])) {
            $model->business = $map['Business'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['MaxConcurrency'])) {
            $model->maxConcurrency = $map['MaxConcurrency'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        return $model;
    }
}
