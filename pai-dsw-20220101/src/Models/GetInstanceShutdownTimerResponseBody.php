<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\Tea\Model;

class GetInstanceShutdownTimerResponseBody extends Model
{
    /**
     * @description 设定关机时间
     *
     * @var string
     */
    public $dueTime;

    /**
     * @description 创建时间
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @description 修改时间
     *
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @description 实例Id
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description 剩余关机时间（ms）
     *
     * @var int
     */
    public $remainingTimeInMs;

    /**
     * @description 请求Id
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dueTime'           => 'DueTime',
        'gmtCreateTime'     => 'GmtCreateTime',
        'gmtModifiedTime'   => 'GmtModifiedTime',
        'instanceId'        => 'InstanceId',
        'remainingTimeInMs' => 'RemainingTimeInMs',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dueTime) {
            $res['DueTime'] = $this->dueTime;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->remainingTimeInMs) {
            $res['RemainingTimeInMs'] = $this->remainingTimeInMs;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInstanceShutdownTimerResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DueTime'])) {
            $model->dueTime = $map['DueTime'];
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RemainingTimeInMs'])) {
            $model->remainingTimeInMs = $map['RemainingTimeInMs'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
