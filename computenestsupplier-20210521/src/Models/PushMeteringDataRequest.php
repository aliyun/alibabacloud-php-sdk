<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Tea\Model;

class PushMeteringDataRequest extends Model
{
    /**
     * @description The metering data. Parameters in the example value:
     *
     *   InstanceId: the ID of an instance in Alibaba Cloud Marketplace. Parameter type: STRING.
     *
     *   StartTime: the time when the metering operation started. Set the parameter to a UNIX timestamp. Unit: seconds. Parameter type: LONG.
     *
     *   EndTime: the time when the metering operation ended. Set the parameter to a UNIX timestamp. Unit: seconds. Parameter type: LONG.
     *
     *   Entities: the metering entities. Parameter type: LIST.
     *
     *   Key: the name of the metering item. Parameter type: STRING.
     *
     *   Frequency: the number of times the instance was used.
     *   Period: the usage duration of the instance. Unit: seconds.
     *
     * - PeriodMin: the usage duration of the instance. Unit: minutes.  - VirtualCpu: the number of virtual CPU cores.
     *
     *   Value: the value of the metering item. The value is equal to or greater than 0. Parameter type: INTEGER.
     *
     **Note**:
     *
     *   If bills are generated for the commodity in real time, the difference between the values of StartTime and EndTime is not limited. However, the time specified by EndTime must be later than that specified by StartTime.
     *   If bills are generated for the commodity by billing cycle, such as by hour, by day, or by month, the difference between the values of StartTime and EndTime must be greater than 5 minutes.
     *   In a request for pushing multiple metering data records, the values of InstanceId must indicate instances of the same commodity. You cannot push metering data of instances of multiple commodities at a time.
     *
     * This parameter is required.
     * @example [{\\"StartTime\\":1681264800,\\"EndTime\\":1681268400,\\"Entities\\":[{\\"Key\\":\\"Unit\\",\\"Value\\":\\"0\\"}]}]
     *
     * @var string
     */
    public $metering;

    /**
     * @description The service instance ID.
     *
     * This parameter is required.
     * @example si-0e6fca6a51a54420****
     *
     * @var string
     */
    public $serviceInstanceId;
    protected $_name = [
        'metering'          => 'Metering',
        'serviceInstanceId' => 'ServiceInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metering) {
            $res['Metering'] = $this->metering;
        }
        if (null !== $this->serviceInstanceId) {
            $res['ServiceInstanceId'] = $this->serviceInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PushMeteringDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Metering'])) {
            $model->metering = $map['Metering'];
        }
        if (isset($map['ServiceInstanceId'])) {
            $model->serviceInstanceId = $map['ServiceInstanceId'];
        }

        return $model;
    }
}
