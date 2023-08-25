<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class Statement extends Model
{
    /**
     * @example 1111111
     *
     * @var int
     */
    public $aliyunUid;

    /**
     * @example SELECT * FROM table
     *
     * @var string
     */
    public $code;

    /**
     * @example Waiting
     *
     * @var string
     */
    public $codeState;

    /**
     * @example SQL
     *
     * @var string
     */
    public $codeType;

    /**
     * @example 1658987911000
     *
     * @var int
     */
    public $endTime;

    /**
     * @example Disk is full
     *
     * @var string
     */
    public $error;

    /**
     * @example true
     *
     * @var bool
     */
    public $haveRows;

    /**
     * @example Spark is running, the ouput is...
     *
     * @var string
     */
    public $output;

    /**
     * @example rg1
     *
     * @var string
     */
    public $resourceGroup;

    /**
     * @example 10
     *
     * @var int
     */
    public $sessionId;

    /**
     * @example 1658977911000
     *
     * @var int
     */
    public $startTime;

    /**
     * @example 100
     *
     * @var int
     */
    public $statementId;

    /**
     * @example 1000
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return Statement
     */
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
