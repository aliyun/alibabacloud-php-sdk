<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MarketplaceIntl\V20221230\Models\PushMeteringDataRequest;

use AlibabaCloud\Tea\Model;

class meteringData extends Model
{
    /**
     * @example 1666854480406
     *
     * @var int
     */
    public $endTime;

    /**
     * @example gtm-cn-20p314k5h05
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example test001
     *
     * @var string
     */
    public $meteringAssist;

    /**
     * @example {"VirtualCpu":10}
     *
     * @var string
     */
    public $meteringEntity;

    /**
     * @example 1662284820000
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'endTime' => 'EndTime',
        'instanceId' => 'InstanceId',
        'meteringAssist' => 'MeteringAssist',
        'meteringEntity' => 'MeteringEntity',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return meteringData
     */
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
