<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengapm\V20220214\Models;

use AlibabaCloud\Tea\Model;

class GetNetworkMinuteTrendRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 5fb6001a73749c24fd9cb356
     *
     * @var string
     */
    public $dataSourceId;

    /**
     * @description This parameter is required.
     *
     * @example 2024-09-27 09:07
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'dataSourceId' => 'dataSourceId',
        'startTime'    => 'startTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourceId) {
            $res['dataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetNetworkMinuteTrendRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dataSourceId'])) {
            $model->dataSourceId = $map['dataSourceId'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        return $model;
    }
}
