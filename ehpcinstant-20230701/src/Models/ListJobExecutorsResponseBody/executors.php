<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListJobExecutorsResponseBody;

use AlibabaCloud\Tea\Model;

class executors extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $arrayIndex;

    /**
     * @example 2024-02-20 10:04:10
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 2024-02-20 10:04:18
     *
     * @var string
     */
    public $endTime;

    /**
     * @var string[]
     */
    public $hostName;

    /**
     * @var string[]
     */
    public $ipAddress;

    /**
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @example Creating executor
     *
     * @var string
     */
    public $statusReason;
    protected $_name = [
        'arrayIndex'   => 'ArrayIndex',
        'createTime'   => 'CreateTime',
        'endTime'      => 'EndTime',
        'hostName'     => 'HostName',
        'ipAddress'    => 'IpAddress',
        'status'       => 'Status',
        'statusReason' => 'StatusReason',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arrayIndex) {
            $res['ArrayIndex'] = $this->arrayIndex;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusReason) {
            $res['StatusReason'] = $this->statusReason;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return executors
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArrayIndex'])) {
            $model->arrayIndex = $map['ArrayIndex'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['HostName'])) {
            if (!empty($map['HostName'])) {
                $model->hostName = $map['HostName'];
            }
        }
        if (isset($map['IpAddress'])) {
            if (!empty($map['IpAddress'])) {
                $model->ipAddress = $map['IpAddress'];
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusReason'])) {
            $model->statusReason = $map['StatusReason'];
        }

        return $model;
    }
}
