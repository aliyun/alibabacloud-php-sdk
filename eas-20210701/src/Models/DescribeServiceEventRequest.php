<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class DescribeServiceEventRequest extends Model
{
    /**
     * @description The end of the time range to query. By default, the current point in time is the end of the time range to query.
     *
     * @example 2006-01-02 15:04:05
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The event type. Valid values:
     *
     *   Normal
     *   Warning
     *
     * @example Normal
     *
     * @var string
     */
    public $eventType;

    /**
     * @description The instance name. For more information about how to obtain the instance name, see [ListServiceInstances](https://help.aliyun.com/document_detail/412108.html).
     *
     * @example echo-test-784xxxx85d-hhnd8
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The page number. Default value: 1.
     *
     * @example 1
     *
     * @var string
     */
    public $pageNum;

    /**
     * @description The number of entries per page. Default value: 100.
     *
     * @example 20
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The beginning of the time range to query. The time must be in UTC. The default value is seven days ago.
     *
     * @example 2006-01-02 15:04:05
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime'      => 'EndTime',
        'eventType'    => 'EventType',
        'instanceName' => 'InstanceName',
        'pageNum'      => 'PageNum',
        'pageSize'     => 'PageSize',
        'startTime'    => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeServiceEventRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
