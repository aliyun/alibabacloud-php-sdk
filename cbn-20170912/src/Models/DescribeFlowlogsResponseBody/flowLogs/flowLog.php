<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeFlowlogsResponseBody\flowLogs;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeFlowlogsResponseBody\flowLogs\flowLog\tags;

class flowLog extends Model
{
    /**
     * @var string
     */
    public $cenId;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $flowLogId;

    /**
     * @var string
     */
    public $flowLogName;

    /**
     * @var string
     */
    public $flowLogVersion;

    /**
     * @var int
     */
    public $interval;

    /**
     * @var string
     */
    public $logFormatString;

    /**
     * @var string
     */
    public $logStoreName;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var string
     */
    public $transitRouterAttachmentId;

    /**
     * @var string
     */
    public $transitRouterId;
    protected $_name = [
        'cenId' => 'CenId',
        'creationTime' => 'CreationTime',
        'description' => 'Description',
        'flowLogId' => 'FlowLogId',
        'flowLogName' => 'FlowLogName',
        'flowLogVersion' => 'FlowLogVersion',
        'interval' => 'Interval',
        'logFormatString' => 'LogFormatString',
        'logStoreName' => 'LogStoreName',
        'projectName' => 'ProjectName',
        'regionId' => 'RegionId',
        'status' => 'Status',
        'tags' => 'Tags',
        'transitRouterAttachmentId' => 'TransitRouterAttachmentId',
        'transitRouterId' => 'TransitRouterId',
    ];

    public function validate()
    {
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
        }

        if (null !== $this->transitRouterAttachmentId) {
            $res['TransitRouterAttachmentId'] = $this->transitRouterAttachmentId;
        }

        if (null !== $this->transitRouterId) {
            $res['TransitRouterId'] = $this->transitRouterId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
