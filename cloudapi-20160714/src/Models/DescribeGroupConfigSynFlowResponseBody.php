<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class DescribeGroupConfigSynFlowResponseBody extends Model
{
    /**
     * @var string
     */
    public $apiCopyVersion;

    /**
     * @var string
     */
    public $sourceGroupId;

    /**
     * @var string
     */
    public $targetGroupId;

    /**
     * @var string
     */
    public $executionTime;

    /**
     * @var string
     */
    public $flowId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $flowStatus;

    /**
     * @var string
     */
    public $targetGroupName;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $sourceGroupName;
    protected $_name = [
        'apiCopyVersion'  => 'ApiCopyVersion',
        'sourceGroupId'   => 'SourceGroupId',
        'targetGroupId'   => 'TargetGroupId',
        'executionTime'   => 'ExecutionTime',
        'flowId'          => 'FlowId',
        'requestId'       => 'RequestId',
        'modifiedTime'    => 'ModifiedTime',
        'region'          => 'Region',
        'flowStatus'      => 'FlowStatus',
        'targetGroupName' => 'TargetGroupName',
        'createdTime'     => 'CreatedTime',
        'sourceGroupName' => 'SourceGroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiCopyVersion) {
            $res['ApiCopyVersion'] = $this->apiCopyVersion;
        }
        if (null !== $this->sourceGroupId) {
            $res['SourceGroupId'] = $this->sourceGroupId;
        }
        if (null !== $this->targetGroupId) {
            $res['TargetGroupId'] = $this->targetGroupId;
        }
        if (null !== $this->executionTime) {
            $res['ExecutionTime'] = $this->executionTime;
        }
        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->flowStatus) {
            $res['FlowStatus'] = $this->flowStatus;
        }
        if (null !== $this->targetGroupName) {
            $res['TargetGroupName'] = $this->targetGroupName;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->sourceGroupName) {
            $res['SourceGroupName'] = $this->sourceGroupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGroupConfigSynFlowResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiCopyVersion'])) {
            $model->apiCopyVersion = $map['ApiCopyVersion'];
        }
        if (isset($map['SourceGroupId'])) {
            $model->sourceGroupId = $map['SourceGroupId'];
        }
        if (isset($map['TargetGroupId'])) {
            $model->targetGroupId = $map['TargetGroupId'];
        }
        if (isset($map['ExecutionTime'])) {
            $model->executionTime = $map['ExecutionTime'];
        }
        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['FlowStatus'])) {
            $model->flowStatus = $map['FlowStatus'];
        }
        if (isset($map['TargetGroupName'])) {
            $model->targetGroupName = $map['TargetGroupName'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['SourceGroupName'])) {
            $model->sourceGroupName = $map['SourceGroupName'];
        }

        return $model;
    }
}
