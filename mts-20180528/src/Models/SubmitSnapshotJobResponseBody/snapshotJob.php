<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20180528\Models\SubmitSnapshotJobResponseBody;

use AlibabaCloud\SDK\Mts\V20180528\Models\SubmitSnapshotJobResponseBody\snapshotJob\input;
use AlibabaCloud\SDK\Mts\V20180528\Models\SubmitSnapshotJobResponseBody\snapshotJob\MNSMessageResult;
use AlibabaCloud\SDK\Mts\V20180528\Models\SubmitSnapshotJobResponseBody\snapshotJob\snapshotConfig;
use AlibabaCloud\Tea\Model;

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
        'code'             => 'Code',
        'count'            => 'Count',
        'creationTime'     => 'CreationTime',
        'id'               => 'Id',
        'input'            => 'Input',
        'MNSMessageResult' => 'MNSMessageResult',
        'message'          => 'Message',
        'pipelineId'       => 'PipelineId',
        'snapshotConfig'   => 'SnapshotConfig',
        'state'            => 'State',
        'tileCount'        => 'TileCount',
        'userData'         => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['Input'] = null !== $this->input ? $this->input->toMap() : null;
        }
        if (null !== $this->MNSMessageResult) {
            $res['MNSMessageResult'] = null !== $this->MNSMessageResult ? $this->MNSMessageResult->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }
        if (null !== $this->snapshotConfig) {
            $res['SnapshotConfig'] = null !== $this->snapshotConfig ? $this->snapshotConfig->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return snapshotJob
     */
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
