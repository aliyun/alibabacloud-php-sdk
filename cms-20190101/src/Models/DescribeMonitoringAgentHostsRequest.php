<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeMonitoringAgentHostsRequest extends Model
{
    /**
     * @description Specifies whether to query Elastic Compute Service (ECS) instances that are provided by Alibaba Cloud or to query hosts that are not provided by Alibaba Cloud. Valid values:
     *
     *   true (default value): queries all the ECS instances that are provided by Alibaba Cloud.
     *   false: queries all the hosts that are not provided by Alibaba Cloud.
     *
     * @example true
     *
     * @var bool
     */
    public $aliyunHost;

    /**
     * @description The name of the host.
     *
     * @example hostNam1
     *
     * @var string
     */
    public $hostName;

    /**
     * @description The ID of the instance.
     *
     * @example i-a3d1q1pm2f9yr29e****
     *
     * @var string
     */
    public $instanceIds;

    /**
     * @description The region ID of the instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $instanceRegionId;

    /**
     * @description The keyword that is used in fuzzy match.
     *
     * @example host1
     *
     * @var string
     */
    public $keyWord;

    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Valid values:
     *
     *   10
     *   20
     *   50
     *   100
     *
     * > Although Alibaba Cloud does not limit the maximum value of this parameter, we recommend that you do not set it to an excessively large value. If you set it to an excessively large value, a timeout error may occur.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The serial number of the host.
     *
     * > This parameter can be used to accurately search for a monitored host.
     * @example a1ab31a3-1234-40f2-9e95-c8caa8f0****
     *
     * @var string
     */
    public $serialNumbers;

    /**
     * @description The status of the hosts that you want to query. Valid values:
     *
     *   Running: queries the hosts that are running.
     *   Stopped: queries the hosts that are stopped, are not installed, or fail to be installed.
     *
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @description The status of SysOM. Valid values:
     *
     *   installing: SysOM is being installed.
     *   running: SysOM is running.
     *   stopped: SysOM is stopped.
     *   uninstalling: SysOM is being uninstalled.
     *
     * @example running
     *
     * @var string
     */
    public $sysomStatus;
    protected $_name = [
        'aliyunHost'       => 'AliyunHost',
        'hostName'         => 'HostName',
        'instanceIds'      => 'InstanceIds',
        'instanceRegionId' => 'InstanceRegionId',
        'keyWord'          => 'KeyWord',
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
        'regionId'         => 'RegionId',
        'serialNumbers'    => 'SerialNumbers',
        'status'           => 'Status',
        'sysomStatus'      => 'SysomStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunHost) {
            $res['AliyunHost'] = $this->aliyunHost;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->instanceRegionId) {
            $res['InstanceRegionId'] = $this->instanceRegionId;
        }
        if (null !== $this->keyWord) {
            $res['KeyWord'] = $this->keyWord;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->serialNumbers) {
            $res['SerialNumbers'] = $this->serialNumbers;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->sysomStatus) {
            $res['SysomStatus'] = $this->sysomStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMonitoringAgentHostsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunHost'])) {
            $model->aliyunHost = $map['AliyunHost'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['InstanceIds'])) {
            $model->instanceIds = $map['InstanceIds'];
        }
        if (isset($map['InstanceRegionId'])) {
            $model->instanceRegionId = $map['InstanceRegionId'];
        }
        if (isset($map['KeyWord'])) {
            $model->keyWord = $map['KeyWord'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SerialNumbers'])) {
            $model->serialNumbers = $map['SerialNumbers'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SysomStatus'])) {
            $model->sysomStatus = $map['SysomStatus'];
        }

        return $model;
    }
}
