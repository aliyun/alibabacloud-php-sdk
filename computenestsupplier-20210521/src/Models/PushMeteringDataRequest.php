<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Tea\Model;

class PushMeteringDataRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example [{\\"StartTime\\":1681264800,\\"EndTime\\":1681268400,\\"Entities\\":[{\\"Key\\":\\"Unit\\",\\"Value\\":\\"0\\"}]}]
     *
     * @var string
     */
    public $metering;

    /**
     * @description This parameter is required.
     *
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
