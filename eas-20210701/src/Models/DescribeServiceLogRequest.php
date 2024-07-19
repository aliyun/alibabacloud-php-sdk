<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class DescribeServiceLogRequest extends Model
{
    /**
     * @description The name of the container that runs the service.
     *
     * @example worker0
     *
     * @var string
     */
    public $containerName;

    /**
     * @description The end of the time range to query. The time must be in UTC.
     *
     * @example 2006-01-02 15:04:05
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The name of the instance that runs the service. For more information about how to query the instance name, see [ListServiceInstances](https://help.aliyun.com/document_detail/412108.html).
     *
     * @example echo-da290ac8-7fckm
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The IP address of the instance whose logs you want to query. For more information about how to query the IP address of an instance, see [ListServiceInstances](https://help.aliyun.com/document_detail/412108.html).
     *
     * @example 10.0.0.1
     *
     * @var string
     */
    public $ip;

    /**
     * @description The keyword that you use to query the logs of the service.
     *
     * @example key
     *
     * @var string
     */
    public $keyword;

    /**
     * @description The page number. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description The number of entries per page. Default value: 500.
     *
     * @example 500
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Specifies whether to query the logs that are generated before the instance last restarts. This parameter is available only if the instance restarts.
     *
     * Valid values:
     *
     *   true
     *
     * <!-- -->
     *
     *   false
     *
     * <!-- -->
     * @example true
     *
     * @var bool
     */
    public $previous;

    /**
     * @description The beginning of the time range to query. The time must be in Coordinated Universal Time (UTC).
     *
     * @example 2006-01-02 15:04:05
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'containerName' => 'ContainerName',
        'endTime'       => 'EndTime',
        'instanceName'  => 'InstanceName',
        'ip'            => 'Ip',
        'keyword'       => 'Keyword',
        'pageNum'       => 'PageNum',
        'pageSize'      => 'PageSize',
        'previous'      => 'Previous',
        'startTime'     => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->containerName) {
            $res['ContainerName'] = $this->containerName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->previous) {
            $res['Previous'] = $this->previous;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeServiceLogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContainerName'])) {
            $model->containerName = $map['ContainerName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Previous'])) {
            $model->previous = $map['Previous'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
