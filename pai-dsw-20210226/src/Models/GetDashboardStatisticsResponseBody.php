<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20210226\Models;

use AlibabaCloud\Tea\Model;

class GetDashboardStatisticsResponseBody extends Model
{
    /**
     * @description 实例数
     *
     * @var int
     */
    public $instanceTotal;

    /**
     * @description 运行实例数
     *
     * @var int
     */
    public $instsanceRunningTotal;

    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceTotal'         => 'InstanceTotal',
        'instsanceRunningTotal' => 'InstsanceRunningTotal',
        'requestId'             => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceTotal) {
            $res['InstanceTotal'] = $this->instanceTotal;
        }
        if (null !== $this->instsanceRunningTotal) {
            $res['InstsanceRunningTotal'] = $this->instsanceRunningTotal;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDashboardStatisticsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceTotal'])) {
            $model->instanceTotal = $map['InstanceTotal'];
        }
        if (isset($map['InstsanceRunningTotal'])) {
            $model->instsanceRunningTotal = $map['InstsanceRunningTotal'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
