<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpCompareJobListResponseBody\fpCompareJobList;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpCompareJobListResponseBody\fpCompareJobList\fpCompareJob\fpCompareResult;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpCompareJobListResponseBody\fpCompareJobList\fpCompareJob\masterFile;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpCompareJobListResponseBody\fpCompareJobList\fpCompareJob\matchFrameStorage;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpCompareJobListResponseBody\fpCompareJobList\fpCompareJob\queryFile;
use AlibabaCloud\Tea\Model;

class fpCompareJob extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $finishTime;

    /**
     * @var fpCompareResult
     */
    public $fpCompareResult;

    /**
     * @var string
     */
    public $fpDBId;

    /**
     * @var string
     */
    public $id;

    /**
     * @var masterFile
     */
    public $masterFile;

    /**
     * @var matchFrameStorage
     */
    public $matchFrameStorage;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $pipelineId;

    /**
     * @var queryFile
     */
    public $queryFile;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'code'              => 'Code',
        'creationTime'      => 'CreationTime',
        'finishTime'        => 'FinishTime',
        'fpCompareResult'   => 'FpCompareResult',
        'fpDBId'            => 'FpDBId',
        'id'                => 'Id',
        'masterFile'        => 'MasterFile',
        'matchFrameStorage' => 'MatchFrameStorage',
        'message'           => 'Message',
        'pipelineId'        => 'PipelineId',
        'queryFile'         => 'QueryFile',
        'state'             => 'State',
        'userData'          => 'UserData',
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
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->fpCompareResult) {
            $res['FpCompareResult'] = null !== $this->fpCompareResult ? $this->fpCompareResult->toMap() : null;
        }
        if (null !== $this->fpDBId) {
            $res['FpDBId'] = $this->fpDBId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->masterFile) {
            $res['MasterFile'] = null !== $this->masterFile ? $this->masterFile->toMap() : null;
        }
        if (null !== $this->matchFrameStorage) {
            $res['MatchFrameStorage'] = null !== $this->matchFrameStorage ? $this->matchFrameStorage->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }
        if (null !== $this->queryFile) {
            $res['QueryFile'] = null !== $this->queryFile ? $this->queryFile->toMap() : null;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fpCompareJob
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['FpCompareResult'])) {
            $model->fpCompareResult = fpCompareResult::fromMap($map['FpCompareResult']);
        }
        if (isset($map['FpDBId'])) {
            $model->fpDBId = $map['FpDBId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['MasterFile'])) {
            $model->masterFile = masterFile::fromMap($map['MasterFile']);
        }
        if (isset($map['MatchFrameStorage'])) {
            $model->matchFrameStorage = matchFrameStorage::fromMap($map['MatchFrameStorage']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }
        if (isset($map['QueryFile'])) {
            $model->queryFile = queryFile::fromMap($map['QueryFile']);
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
