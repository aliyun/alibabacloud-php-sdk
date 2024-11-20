<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\QueryDNAJobListResponseBody;

use AlibabaCloud\SDK\ICE\V20201109\Models\QueryDNAJobListResponseBody\jobList\input;
use AlibabaCloud\Tea\Model;

class jobList extends Model
{
    /**
     * @description The response code.
     *
     * @example "InvalidParameter.ResourceNotFound"
     *
     * @var string
     */
    public $code;

    /**
     * @description The configurations of the media fingerprint analysis job.
     *
     * @example {"SaveType": "save","MediaType"":"video"}
     *
     * @var string
     */
    public $config;

    /**
     * @description The time when the job was created.
     *
     * @example 2022-12-28T03:21:37Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The ID of the media fingerprint library.
     *
     * @example 2288c6ca184c0e47098a5b665e2a12****
     *
     * @var string
     */
    public $DBId;

    /**
     * @description The URL of the media fingerprint analysis result.
     *
     * @example http://test_bucket.oss-cn-shanghai.aliyuncs.com/fingerprint/video/search_result/5/5.txt
     *
     * @var string
     */
    public $DNAResult;

    /**
     * @description The time when the job was complete.
     *
     * @example 2022-12-28T03:21:44Z
     *
     * @var string
     */
    public $finishTime;

    /**
     * @description The job ID.
     *
     * @example 88c6ca184c0e47098a5b665e2a12****
     *
     * @var string
     */
    public $id;

    /**
     * @description The details of the input file.
     *
     * @var input
     */
    public $input;

    /**
     * @description The returned message.
     *
     * @example "The resource operated \\"a887d0b***d805ef6f7f6786302\\" cannot be found"
     *
     * @var string
     */
    public $message;

    /**
     * @description The primary key of the video. You must make sure that each primary key is unique.
     *
     * @example 3ca84a39a9024f19853b21be9cf9****
     *
     * @var string
     */
    public $primaryKey;

    /**
     * @description The job state. Valid values:
     *
     *   **Queuing**: The job is waiting in the queue.
     *   **Analysing**: The job is in progress.
     *   **Success**: The job is successful.
     *   **Fail**: The job failed.
     *
     * @example Queuing
     *
     * @var string
     */
    public $status;

    /**
     * @description The user-defined data.
     *
     * @example testdna
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'code'         => 'Code',
        'config'       => 'Config',
        'creationTime' => 'CreationTime',
        'DBId'         => 'DBId',
        'DNAResult'    => 'DNAResult',
        'finishTime'   => 'FinishTime',
        'id'           => 'Id',
        'input'        => 'Input',
        'message'      => 'Message',
        'primaryKey'   => 'PrimaryKey',
        'status'       => 'Status',
        'userData'     => 'UserData',
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
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->DBId) {
            $res['DBId'] = $this->DBId;
        }
        if (null !== $this->DNAResult) {
            $res['DNAResult'] = $this->DNAResult;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->input) {
            $res['Input'] = null !== $this->input ? $this->input->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->primaryKey) {
            $res['PrimaryKey'] = $this->primaryKey;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['DBId'])) {
            $model->DBId = $map['DBId'];
        }
        if (isset($map['DNAResult'])) {
            $model->DNAResult = $map['DNAResult'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Input'])) {
            $model->input = input::fromMap($map['Input']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PrimaryKey'])) {
            $model->primaryKey = $map['PrimaryKey'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
