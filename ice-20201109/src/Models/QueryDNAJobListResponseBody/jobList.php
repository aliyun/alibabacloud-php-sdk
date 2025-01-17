<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\QueryDNAJobListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\QueryDNAJobListResponseBody\jobList\input;

class jobList extends Model
{
    /**
     * @var string
     */
    public $code;
    /**
     * @var string
     */
    public $config;
    /**
     * @var string
     */
    public $creationTime;
    /**
     * @var string
     */
    public $DBId;
    /**
     * @var string
     */
    public $DNAResult;
    /**
     * @var string
     */
    public $finishTime;
    /**
     * @var string
     */
    public $id;
    /**
     * @var input
     */
    public $input;
    /**
     * @var string
     */
    public $message;
    /**
     * @var string
     */
    public $primaryKey;
    /**
     * @var string
     */
    public $status;
    /**
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
        if (null !== $this->input) {
            $this->input->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['Input'] = null !== $this->input ? $this->input->toArray($noStream) : $this->input;
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
