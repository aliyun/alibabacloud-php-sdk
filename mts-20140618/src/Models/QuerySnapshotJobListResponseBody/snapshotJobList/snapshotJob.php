<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QuerySnapshotJobListResponseBody\snapshotJobList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\QuerySnapshotJobListResponseBody\snapshotJobList\snapshotJob\input;
use AlibabaCloud\SDK\Mts\V20140618\Models\QuerySnapshotJobListResponseBody\snapshotJobList\snapshotJob\MNSMessageResult;
use AlibabaCloud\SDK\Mts\V20140618\Models\QuerySnapshotJobListResponseBody\snapshotJobList\snapshotJob\snapshotConfig;

class snapshotJob extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $count;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $id;

    /**
     * @var input
     */
    public $input;

    /**
     * @var MNSMessageResult
     */
    public $MNSMessageResult;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $pipelineId;

    /**
     * @var snapshotConfig
     */
    public $snapshotConfig;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $tileCount;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'code' => 'Code',
        'count' => 'Count',
        'creationTime' => 'CreationTime',
        'id' => 'Id',
        'input' => 'Input',
        'MNSMessageResult' => 'MNSMessageResult',
        'message' => 'Message',
        'pipelineId' => 'PipelineId',
        'snapshotConfig' => 'SnapshotConfig',
        'state' => 'State',
        'tileCount' => 'TileCount',
        'userData' => 'UserData',
    ];

    public function validate()
    {
        if (null !== $this->input) {
            $this->input->validate();
        }
        if (null !== $this->MNSMessageResult) {
            $this->MNSMessageResult->validate();
        }
        if (null !== $this->snapshotConfig) {
            $this->snapshotConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->input) {
            $res['Input'] = null !== $this->input ? $this->input->toArray($noStream) : $this->input;
        }

        if (null !== $this->MNSMessageResult) {
            $res['MNSMessageResult'] = null !== $this->MNSMessageResult ? $this->MNSMessageResult->toArray($noStream) : $this->MNSMessageResult;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }

        if (null !== $this->snapshotConfig) {
            $res['SnapshotConfig'] = null !== $this->snapshotConfig ? $this->snapshotConfig->toArray($noStream) : $this->snapshotConfig;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->tileCount) {
            $res['TileCount'] = $this->tileCount;
        }

        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Input'])) {
            $model->input = input::fromMap($map['Input']);
        }

        if (isset($map['MNSMessageResult'])) {
            $model->MNSMessageResult = MNSMessageResult::fromMap($map['MNSMessageResult']);
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }

        if (isset($map['SnapshotConfig'])) {
            $model->snapshotConfig = snapshotConfig::fromMap($map['SnapshotConfig']);
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['TileCount'])) {
            $model->tileCount = $map['TileCount'];
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
