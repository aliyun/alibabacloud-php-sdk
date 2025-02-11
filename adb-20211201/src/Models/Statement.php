<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class Statement extends Model
{
    /**
     * @var int
     */
    public $aliyunUid;
    /**
     * @var string
     */
    public $code;
    /**
     * @var string
     */
    public $codeState;
    /**
     * @var string
     */
    public $codeType;
    /**
     * @var int
     */
    public $endTime;
    /**
     * @var string
     */
    public $error;
    /**
     * @var bool
     */
    public $haveRows;
    /**
     * @var string
     */
    public $output;
    /**
     * @var string
     */
    public $resourceGroup;
    /**
     * @var int
     */
    public $sessionId;
    /**
     * @var int
     */
    public $startTime;
    /**
     * @var int
     */
    public $statementId;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'aliyunUid'     => 'AliyunUid',
        'code'          => 'Code',
        'codeState'     => 'CodeState',
        'codeType'      => 'CodeType',
        'endTime'       => 'EndTime',
        'error'         => 'Error',
        'haveRows'      => 'HaveRows',
        'output'        => 'Output',
        'resourceGroup' => 'ResourceGroup',
        'sessionId'     => 'SessionId',
        'startTime'     => 'StartTime',
        'statementId'   => 'StatementId',
        'totalCount'    => 'TotalCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunUid) {
            $res['AliyunUid'] = $this->aliyunUid;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->codeState) {
            $res['CodeState'] = $this->codeState;
        }

        if (null !== $this->codeType) {
            $res['CodeType'] = $this->codeType;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->error) {
            $res['Error'] = $this->error;
        }

        if (null !== $this->haveRows) {
            $res['HaveRows'] = $this->haveRows;
        }

        if (null !== $this->output) {
            $res['Output'] = $this->output;
        }

        if (null !== $this->resourceGroup) {
            $res['ResourceGroup'] = $this->resourceGroup;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->statementId) {
            $res['StatementId'] = $this->statementId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['AliyunUid'])) {
            $model->aliyunUid = $map['AliyunUid'];
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['CodeState'])) {
            $model->codeState = $map['CodeState'];
        }

        if (isset($map['CodeType'])) {
            $model->codeType = $map['CodeType'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Error'])) {
            $model->error = $map['Error'];
        }

        if (isset($map['HaveRows'])) {
            $model->haveRows = $map['HaveRows'];
        }

        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }

        if (isset($map['ResourceGroup'])) {
            $model->resourceGroup = $map['ResourceGroup'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['StatementId'])) {
            $model->statementId = $map['StatementId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
