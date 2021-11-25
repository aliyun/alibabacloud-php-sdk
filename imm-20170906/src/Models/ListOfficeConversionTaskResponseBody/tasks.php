<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models\ListOfficeConversionTaskResponseBody;

use AlibabaCloud\Tea\Model;

class tasks extends Model
{
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
    public $finishTime;

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
    public $notifyTopicName;

    /**
     * @var int
     */
    public $pageCount;

    /**
     * @var int
     */
    public $percent;

    /**
     * @var string
     */
    public $srcUri;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $tgtType;

    /**
     * @var string
     */
    public $tgtUri;
    protected $_name = [
        'createTime'      => 'CreateTime',
        'externalID'      => 'ExternalID',
        'finishTime'      => 'FinishTime',
        'imageSpec'       => 'ImageSpec',
        'notifyEndpoint'  => 'NotifyEndpoint',
        'notifyTopicName' => 'NotifyTopicName',
        'pageCount'       => 'PageCount',
        'percent'         => 'Percent',
        'srcUri'          => 'SrcUri',
        'status'          => 'Status',
        'taskId'          => 'TaskId',
        'tgtType'         => 'TgtType',
        'tgtUri'          => 'TgtUri',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->externalID) {
            $res['ExternalID'] = $this->externalID;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->imageSpec) {
            $res['ImageSpec'] = $this->imageSpec;
        }
        if (null !== $this->notifyEndpoint) {
            $res['NotifyEndpoint'] = $this->notifyEndpoint;
        }
        if (null !== $this->notifyTopicName) {
            $res['NotifyTopicName'] = $this->notifyTopicName;
        }
        if (null !== $this->pageCount) {
            $res['PageCount'] = $this->pageCount;
        }
        if (null !== $this->percent) {
            $res['Percent'] = $this->percent;
        }
        if (null !== $this->srcUri) {
            $res['SrcUri'] = $this->srcUri;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->tgtType) {
            $res['TgtType'] = $this->tgtType;
        }
        if (null !== $this->tgtUri) {
            $res['TgtUri'] = $this->tgtUri;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tasks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ExternalID'])) {
            $model->externalID = $map['ExternalID'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['ImageSpec'])) {
            $model->imageSpec = $map['ImageSpec'];
        }
        if (isset($map['NotifyEndpoint'])) {
            $model->notifyEndpoint = $map['NotifyEndpoint'];
        }
        if (isset($map['NotifyTopicName'])) {
            $model->notifyTopicName = $map['NotifyTopicName'];
        }
        if (isset($map['PageCount'])) {
            $model->pageCount = $map['PageCount'];
        }
        if (isset($map['Percent'])) {
            $model->percent = $map['Percent'];
        }
        if (isset($map['SrcUri'])) {
            $model->srcUri = $map['SrcUri'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TgtType'])) {
            $model->tgtType = $map['TgtType'];
        }
        if (isset($map['TgtUri'])) {
            $model->tgtUri = $map['TgtUri'];
        }

        return $model;
    }
}
