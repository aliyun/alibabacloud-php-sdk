<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class DescribeGroupConfigSynFlowsRequest extends Model
{
    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $targetGroupName;

    /**
     * @var string
     */
    public $sourceGroupName;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $flowStatus;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pageNumber;
    protected $_name = [
        'securityToken'   => 'SecurityToken',
        'targetGroupName' => 'TargetGroupName',
        'sourceGroupName' => 'SourceGroupName',
        'startTime'       => 'StartTime',
        'endTime'         => 'EndTime',
        'flowStatus'      => 'FlowStatus',
        'pageSize'        => 'PageSize',
        'pageNumber'      => 'PageNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->targetGroupName) {
            $res['TargetGroupName'] = $this->targetGroupName;
        }
        if (null !== $this->sourceGroupName) {
            $res['SourceGroupName'] = $this->sourceGroupName;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->flowStatus) {
            $res['FlowStatus'] = $this->flowStatus;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGroupConfigSynFlowsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['TargetGroupName'])) {
            $model->targetGroupName = $map['TargetGroupName'];
        }
        if (isset($map['SourceGroupName'])) {
            $model->sourceGroupName = $map['SourceGroupName'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['FlowStatus'])) {
            $model->flowStatus = $map['FlowStatus'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        return $model;
    }
}
