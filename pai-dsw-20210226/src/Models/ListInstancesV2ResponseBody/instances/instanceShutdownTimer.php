<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20210226\Models\ListInstancesV2ResponseBody\instances;

use AlibabaCloud\Tea\Model;

class instanceShutdownTimer extends Model
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
    protected $_name = [
        'dueTime'           => 'DueTime',
        'gmtCreateTime'     => 'GmtCreateTime',
        'gmtModifiedTime'   => 'GmtModifiedTime',
        'instanceId'        => 'InstanceId',
        'remainingTimeInMs' => 'RemainingTimeInMs',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceShutdownTimer
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

        return $model;
    }
}
