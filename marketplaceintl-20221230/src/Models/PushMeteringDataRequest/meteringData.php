<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MarketplaceIntl\V20221230\Models\PushMeteringDataRequest;

use AlibabaCloud\Dara\Model;

class meteringData extends Model
{
    /**
     * @var int
     */
    public $endTime;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $meteringAssist;
    /**
     * @var string
     */
    public $meteringEntity;
    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'endTime'        => 'EndTime',
        'instanceId'     => 'InstanceId',
        'meteringAssist' => 'MeteringAssist',
        'meteringEntity' => 'MeteringEntity',
        'startTime'      => 'StartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->meteringAssist) {
            $res['MeteringAssist'] = $this->meteringAssist;
        }

        if (null !== $this->meteringEntity) {
            $res['MeteringEntity'] = $this->meteringEntity;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['MeteringAssist'])) {
            $model->meteringAssist = $map['MeteringAssist'];
        }

        if (isset($map['MeteringEntity'])) {
            $model->meteringEntity = $map['MeteringEntity'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
