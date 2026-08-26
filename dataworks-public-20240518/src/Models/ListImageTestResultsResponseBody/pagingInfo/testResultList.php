<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListImageTestResultsResponseBody\pagingInfo;

use AlibabaCloud\Dara\Model;

class testResultList extends Model
{
    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $operateTime;

    /**
     * @var string
     */
    public $processId;

    /**
     * @var string
     */
    public $publishStage;

    /**
     * @var int
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'imageId' => 'ImageId',
        'message' => 'Message',
        'operateTime' => 'OperateTime',
        'processId' => 'ProcessId',
        'publishStage' => 'PublishStage',
        'resourceGroupId' => 'ResourceGroupId',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->operateTime) {
            $res['OperateTime'] = $this->operateTime;
        }

        if (null !== $this->processId) {
            $res['ProcessId'] = $this->processId;
        }

        if (null !== $this->publishStage) {
            $res['PublishStage'] = $this->publishStage;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['OperateTime'])) {
            $model->operateTime = $map['OperateTime'];
        }

        if (isset($map['ProcessId'])) {
            $model->processId = $map['ProcessId'];
        }

        if (isset($map['PublishStage'])) {
            $model->publishStage = $map['PublishStage'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
