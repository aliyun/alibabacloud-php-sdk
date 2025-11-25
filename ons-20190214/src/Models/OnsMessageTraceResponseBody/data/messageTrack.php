<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsMessageTraceResponseBody\data;

use AlibabaCloud\Dara\Model;

class messageTrack extends Model
{
    /**
     * @var string
     */
    public $consumerGroup;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $trackType;
    protected $_name = [
        'consumerGroup' => 'ConsumerGroup',
        'instanceId' => 'InstanceId',
        'trackType' => 'TrackType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consumerGroup) {
            $res['ConsumerGroup'] = $this->consumerGroup;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->trackType) {
            $res['TrackType'] = $this->trackType;
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
        if (isset($map['ConsumerGroup'])) {
            $model->consumerGroup = $map['ConsumerGroup'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['TrackType'])) {
            $model->trackType = $map['TrackType'];
        }

        return $model;
    }
}
