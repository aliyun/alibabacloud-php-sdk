<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDataDistResultResponseBody\distResults\distResult\statusStats\statusStat\instances;

use AlibabaCloud\Tea\Model;

class instance extends Model
{
    /**
     * @description The ID of the instance
     *
     * @example i-5qzje8f5un1wmi341m2yetaxv
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The start time of the distribution. The time is displayed in UTC.
     *
     * @example 2021-11-19T07:24:52Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The description of the distribution status.
     *
     * @example SUCCESS
     *
     * @var string
     */
    public $statusDescrip;

    /**
     * @description The time when the distribution status was last updated. The time is displayed in UTC.
     *
     * @example 2021-10-11T02:38:19Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'instanceId'    => 'InstanceId',
        'startTime'     => 'StartTime',
        'statusDescrip' => 'StatusDescrip',
        'updateTime'    => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->statusDescrip) {
            $res['StatusDescrip'] = $this->statusDescrip;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StatusDescrip'])) {
            $model->statusDescrip = $map['StatusDescrip'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
