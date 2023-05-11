<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class BatchGetEdgeDriverRequest extends Model
{
    /**
     * @example fec565038d7544978d9aed5c1a******
     *
     * @var string[]
     */
    public $driverIds;

    /**
     * @description The ID of the Internet of Things (IoT) service instance. This parameter is not required for public instances. However, this parameter is required for the instances that you have purchased.
     *
     * @example ot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;
    protected $_name = [
        'driverIds'     => 'DriverIds',
        'iotInstanceId' => 'IotInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->driverIds) {
            $res['DriverIds'] = $this->driverIds;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchGetEdgeDriverRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DriverIds'])) {
            if (!empty($map['DriverIds'])) {
                $model->driverIds = $map['DriverIds'];
            }
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }

        return $model;
    }
}
