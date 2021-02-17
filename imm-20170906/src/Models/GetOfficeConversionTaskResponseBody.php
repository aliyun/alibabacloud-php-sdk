<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\SDK\Imm\V20170906\Models\GetOfficeConversionTaskResponseBody\failDetail;
use AlibabaCloud\Tea\Model;

class GetOfficeConversionTaskResponseBody extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var failDetail
     */
    public $failDetail;

    /**
     * @var string
     */
    public $tgtType;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $percent;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $externalID;

    /**
     * @var string
     */
    public $imageSpec;

    /**
     * @var string
     */
    public $notifyEndpoint;

    /**
     * @var string
     */
    public $tgtUri;

    /**
     * @var string
     */
    public $finishTime;

    /**
     * @var int
     */
    public $pageCount;

    /**
     * @var string
     */
    public $notifyTopicName;

    /**
     * @var string
     */
    public $srcUri;
    protected $_name = [
        'status'          => 'Status',
        'failDetail'      => 'FailDetail',
        'tgtType'         => 'TgtType',
        'taskId'          => 'TaskId',
        'requestId'       => 'RequestId',
        'percent'         => 'Percent',
        'createTime'      => 'CreateTime',
        'externalID'      => 'ExternalID',
        'imageSpec'       => 'ImageSpec',
        'notifyEndpoint'  => 'NotifyEndpoint',
        'tgtUri'          => 'TgtUri',
        'finishTime'      => 'FinishTime',
        'pageCount'       => 'PageCount',
        'notifyTopicName' => 'NotifyTopicName',
        'srcUri'          => 'SrcUri',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->failDetail) {
            $res['FailDetail'] = null !== $this->failDetail ? $this->failDetail->toMap() : null;
        }
        if (null !== $this->tgtType) {
            $res['TgtType'] = $this->tgtType;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->percent) {
            $res['Percent'] = $this->percent;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->externalID) {
            $res['ExternalID'] = $this->externalID;
        }
        if (null !== $this->imageSpec) {
            $res['ImageSpec'] = $this->imageSpec;
        }
        if (null !== $this->notifyEndpoint) {
            $res['NotifyEndpoint'] = $this->notifyEndpoint;
        }
        if (null !== $this->tgtUri) {
            $res['TgtUri'] = $this->tgtUri;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->pageCount) {
            $res['PageCount'] = $this->pageCount;
        }
        if (null !== $this->notifyTopicName) {
            $res['NotifyTopicName'] = $this->notifyTopicName;
        }
        if (null !== $this->srcUri) {
            $res['SrcUri'] = $this->srcUri;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOfficeConversionTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['FailDetail'])) {
            $model->failDetail = failDetail::fromMap($map['FailDetail']);
        }
        if (isset($map['TgtType'])) {
            $model->tgtType = $map['TgtType'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Percent'])) {
            $model->percent = $map['Percent'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ExternalID'])) {
            $model->externalID = $map['ExternalID'];
        }
        if (isset($map['ImageSpec'])) {
            $model->imageSpec = $map['ImageSpec'];
        }
        if (isset($map['NotifyEndpoint'])) {
            $model->notifyEndpoint = $map['NotifyEndpoint'];
        }
        if (isset($map['TgtUri'])) {
            $model->tgtUri = $map['TgtUri'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['PageCount'])) {
            $model->pageCount = $map['PageCount'];
        }
        if (isset($map['NotifyTopicName'])) {
            $model->notifyTopicName = $map['NotifyTopicName'];
        }
        if (isset($map['SrcUri'])) {
            $model->srcUri = $map['SrcUri'];
        }

        return $model;
    }
}
