<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeFlowlogsResponseBody\flowLogs;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeFlowlogsResponseBody\flowLogs\flowLog\tags;
use AlibabaCloud\Tea\Model;

class flowLog extends Model
{
    /**
     * @description The ID of the Cloud Enterprise Network (CEN) instance.
     *
     * @example cen-7qthudw0ll6jmc****
     *
     * @var string
     */
    public $cenId;

    /**
     * @description The time when the flow log was created.
     *
     * The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ssZ format. The time is displayed in UTC.
     * @example 2021-07-24T13:00:52Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The description of the flow log.
     *
     * @example myFlowlog
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the flow log.
     *
     * @example flowlog-m5evbtbpt****
     *
     * @var string
     */
    public $flowLogId;

    /**
     * @description The name of the flow log.
     *
     * @example myFlowlog
     *
     * @var string
     */
    public $flowLogName;

    /**
     * @var string
     */
    public $flowLogVersion;

    /**
     * @description The time window for collecting log data. Unit: seconds. Valid values: **60** or **600** Default value: **600**.
     *
     * @example 60
     *
     * @var int
     */
    public $interval;

    /**
     * @var string
     */
    public $logFormatString;

    /**
     * @description The Logstore that stores the captured traffic data.
     *
     * @example FlowLogStore
     *
     * @var string
     */
    public $logStoreName;

    /**
     * @description The name of the project that stores the captured traffic data.
     *
     * @example FlowLogProject
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The region ID of the flow log.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The status of the flow log. Valid values:
     *
     *   **Active**: The flow log is enabled.
     *   **Inactive**: The flow log is disabled.
     *
     * @example Active
     *
     * @var string
     */
    public $status;

    /**
     * @description A list of tags.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description The ID of the network instance connection
     *
     * @example tr-attach-5x4o4ynzuqbv6g****
     *
     * @var string
     */
    public $transitRouterAttachmentId;

    /**
     * @var string
     */
    public $transitRouterId;
    protected $_name = [
        'cenId'                     => 'CenId',
        'creationTime'              => 'CreationTime',
        'description'               => 'Description',
        'flowLogId'                 => 'FlowLogId',
        'flowLogName'               => 'FlowLogName',
        'flowLogVersion'            => 'FlowLogVersion',
        'interval'                  => 'Interval',
        'logFormatString'           => 'LogFormatString',
        'logStoreName'              => 'LogStoreName',
        'projectName'               => 'ProjectName',
        'regionId'                  => 'RegionId',
        'status'                    => 'Status',
        'tags'                      => 'Tags',
        'transitRouterAttachmentId' => 'TransitRouterAttachmentId',
        'transitRouterId'           => 'TransitRouterId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->flowLogId) {
            $res['FlowLogId'] = $this->flowLogId;
        }
        if (null !== $this->flowLogName) {
            $res['FlowLogName'] = $this->flowLogName;
        }
        if (null !== $this->flowLogVersion) {
            $res['FlowLogVersion'] = $this->flowLogVersion;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->logFormatString) {
            $res['LogFormatString'] = $this->logFormatString;
        }
        if (null !== $this->logStoreName) {
            $res['LogStoreName'] = $this->logStoreName;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->transitRouterAttachmentId) {
            $res['TransitRouterAttachmentId'] = $this->transitRouterAttachmentId;
        }
        if (null !== $this->transitRouterId) {
            $res['TransitRouterId'] = $this->transitRouterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flowLog
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FlowLogId'])) {
            $model->flowLogId = $map['FlowLogId'];
        }
        if (isset($map['FlowLogName'])) {
            $model->flowLogName = $map['FlowLogName'];
        }
        if (isset($map['FlowLogVersion'])) {
            $model->flowLogVersion = $map['FlowLogVersion'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['LogFormatString'])) {
            $model->logFormatString = $map['LogFormatString'];
        }
        if (isset($map['LogStoreName'])) {
            $model->logStoreName = $map['LogStoreName'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['TransitRouterAttachmentId'])) {
            $model->transitRouterAttachmentId = $map['TransitRouterAttachmentId'];
        }
        if (isset($map['TransitRouterId'])) {
            $model->transitRouterId = $map['TransitRouterId'];
        }

        return $model;
    }
}
