<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models\GetDataCheckTaskListResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $checkResult;

    /**
     * @var int
     */
    public $checkTableNum;

    /**
     * @var string
     */
    public $checkTemplateId;

    /**
     * @var int
     */
    public $checkType;

    /**
     * @var string
     */
    public $dstDsId;

    /**
     * @var string
     */
    public $dstDsName;

    /**
     * @var string
     */
    public $dstDsType;

    /**
     * @var string
     */
    public $dstEngineId;

    /**
     * @var string
     */
    public $dstEngineName;

    /**
     * @var string
     */
    public $dstEngineType;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $errorMsg;

    /**
     * @var int
     */
    public $errorTableNum;

    /**
     * @var int
     */
    public $execStatus;

    /**
     * @var string
     */
    public $execTime;

    /**
     * @var int
     */
    public $executeType;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $isScheduled;

    /**
     * @var int
     */
    public $lastBatchId;

    /**
     * @var int
     */
    public $lastFinishedId;

    /**
     * @var mixed[]
     */
    public $passProcess;

    /**
     * @var float
     */
    public $process;

    /**
     * @var string
     */
    public $reportTime;

    /**
     * @var string
     */
    public $reportTitle;

    /**
     * @var int
     */
    public $skipTableNum;

    /**
     * @var string
     */
    public $srcDsId;

    /**
     * @var string
     */
    public $srcDsName;

    /**
     * @var string
     */
    public $srcDsType;

    /**
     * @var string
     */
    public $srcEngineId;

    /**
     * @var string
     */
    public $srcEngineName;

    /**
     * @var string
     */
    public $srcEngineType;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var int
     */
    public $successfulTableNum;

    /**
     * @var string
     */
    public $taskDescription;

    /**
     * @var int
     */
    public $taskMode;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $templateName;
    protected $_name = [
        'checkResult' => 'checkResult',
        'checkTableNum' => 'checkTableNum',
        'checkTemplateId' => 'checkTemplateId',
        'checkType' => 'checkType',
        'dstDsId' => 'dstDsId',
        'dstDsName' => 'dstDsName',
        'dstDsType' => 'dstDsType',
        'dstEngineId' => 'dstEngineId',
        'dstEngineName' => 'dstEngineName',
        'dstEngineType' => 'dstEngineType',
        'endTime' => 'endTime',
        'errorMsg' => 'errorMsg',
        'errorTableNum' => 'errorTableNum',
        'execStatus' => 'execStatus',
        'execTime' => 'execTime',
        'executeType' => 'executeType',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'id' => 'id',
        'isScheduled' => 'isScheduled',
        'lastBatchId' => 'lastBatchId',
        'lastFinishedId' => 'lastFinishedId',
        'passProcess' => 'passProcess',
        'process' => 'process',
        'reportTime' => 'reportTime',
        'reportTitle' => 'reportTitle',
        'skipTableNum' => 'skipTableNum',
        'srcDsId' => 'srcDsId',
        'srcDsName' => 'srcDsName',
        'srcDsType' => 'srcDsType',
        'srcEngineId' => 'srcEngineId',
        'srcEngineName' => 'srcEngineName',
        'srcEngineType' => 'srcEngineType',
        'startTime' => 'startTime',
        'successfulTableNum' => 'successfulTableNum',
        'taskDescription' => 'taskDescription',
        'taskMode' => 'taskMode',
        'taskName' => 'taskName',
        'templateName' => 'templateName',
    ];

    public function validate()
    {
        if (\is_array($this->passProcess)) {
            Model::validateArray($this->passProcess);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkResult) {
            $res['checkResult'] = $this->checkResult;
        }

        if (null !== $this->checkTableNum) {
            $res['checkTableNum'] = $this->checkTableNum;
        }

        if (null !== $this->checkTemplateId) {
            $res['checkTemplateId'] = $this->checkTemplateId;
        }

        if (null !== $this->checkType) {
            $res['checkType'] = $this->checkType;
        }

        if (null !== $this->dstDsId) {
            $res['dstDsId'] = $this->dstDsId;
        }

        if (null !== $this->dstDsName) {
            $res['dstDsName'] = $this->dstDsName;
        }

        if (null !== $this->dstDsType) {
            $res['dstDsType'] = $this->dstDsType;
        }

        if (null !== $this->dstEngineId) {
            $res['dstEngineId'] = $this->dstEngineId;
        }

        if (null !== $this->dstEngineName) {
            $res['dstEngineName'] = $this->dstEngineName;
        }

        if (null !== $this->dstEngineType) {
            $res['dstEngineType'] = $this->dstEngineType;
        }

        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->errorMsg) {
            $res['errorMsg'] = $this->errorMsg;
        }

        if (null !== $this->errorTableNum) {
            $res['errorTableNum'] = $this->errorTableNum;
        }

        if (null !== $this->execStatus) {
            $res['execStatus'] = $this->execStatus;
        }

        if (null !== $this->execTime) {
            $res['execTime'] = $this->execTime;
        }

        if (null !== $this->executeType) {
            $res['executeType'] = $this->executeType;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->isScheduled) {
            $res['isScheduled'] = $this->isScheduled;
        }

        if (null !== $this->lastBatchId) {
            $res['lastBatchId'] = $this->lastBatchId;
        }

        if (null !== $this->lastFinishedId) {
            $res['lastFinishedId'] = $this->lastFinishedId;
        }

        if (null !== $this->passProcess) {
            if (\is_array($this->passProcess)) {
                $res['passProcess'] = [];
                foreach ($this->passProcess as $key1 => $value1) {
                    $res['passProcess'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->process) {
            $res['process'] = $this->process;
        }

        if (null !== $this->reportTime) {
            $res['reportTime'] = $this->reportTime;
        }

        if (null !== $this->reportTitle) {
            $res['reportTitle'] = $this->reportTitle;
        }

        if (null !== $this->skipTableNum) {
            $res['skipTableNum'] = $this->skipTableNum;
        }

        if (null !== $this->srcDsId) {
            $res['srcDsId'] = $this->srcDsId;
        }

        if (null !== $this->srcDsName) {
            $res['srcDsName'] = $this->srcDsName;
        }

        if (null !== $this->srcDsType) {
            $res['srcDsType'] = $this->srcDsType;
        }

        if (null !== $this->srcEngineId) {
            $res['srcEngineId'] = $this->srcEngineId;
        }

        if (null !== $this->srcEngineName) {
            $res['srcEngineName'] = $this->srcEngineName;
        }

        if (null !== $this->srcEngineType) {
            $res['srcEngineType'] = $this->srcEngineType;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->successfulTableNum) {
            $res['successfulTableNum'] = $this->successfulTableNum;
        }

        if (null !== $this->taskDescription) {
            $res['taskDescription'] = $this->taskDescription;
        }

        if (null !== $this->taskMode) {
            $res['taskMode'] = $this->taskMode;
        }

        if (null !== $this->taskName) {
            $res['taskName'] = $this->taskName;
        }

        if (null !== $this->templateName) {
            $res['templateName'] = $this->templateName;
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
        if (isset($map['checkResult'])) {
            $model->checkResult = $map['checkResult'];
        }

        if (isset($map['checkTableNum'])) {
            $model->checkTableNum = $map['checkTableNum'];
        }

        if (isset($map['checkTemplateId'])) {
            $model->checkTemplateId = $map['checkTemplateId'];
        }

        if (isset($map['checkType'])) {
            $model->checkType = $map['checkType'];
        }

        if (isset($map['dstDsId'])) {
            $model->dstDsId = $map['dstDsId'];
        }

        if (isset($map['dstDsName'])) {
            $model->dstDsName = $map['dstDsName'];
        }

        if (isset($map['dstDsType'])) {
            $model->dstDsType = $map['dstDsType'];
        }

        if (isset($map['dstEngineId'])) {
            $model->dstEngineId = $map['dstEngineId'];
        }

        if (isset($map['dstEngineName'])) {
            $model->dstEngineName = $map['dstEngineName'];
        }

        if (isset($map['dstEngineType'])) {
            $model->dstEngineType = $map['dstEngineType'];
        }

        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['errorMsg'])) {
            $model->errorMsg = $map['errorMsg'];
        }

        if (isset($map['errorTableNum'])) {
            $model->errorTableNum = $map['errorTableNum'];
        }

        if (isset($map['execStatus'])) {
            $model->execStatus = $map['execStatus'];
        }

        if (isset($map['execTime'])) {
            $model->execTime = $map['execTime'];
        }

        if (isset($map['executeType'])) {
            $model->executeType = $map['executeType'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['isScheduled'])) {
            $model->isScheduled = $map['isScheduled'];
        }

        if (isset($map['lastBatchId'])) {
            $model->lastBatchId = $map['lastBatchId'];
        }

        if (isset($map['lastFinishedId'])) {
            $model->lastFinishedId = $map['lastFinishedId'];
        }

        if (isset($map['passProcess'])) {
            if (!empty($map['passProcess'])) {
                $model->passProcess = [];
                foreach ($map['passProcess'] as $key1 => $value1) {
                    $model->passProcess[$key1] = $value1;
                }
            }
        }

        if (isset($map['process'])) {
            $model->process = $map['process'];
        }

        if (isset($map['reportTime'])) {
            $model->reportTime = $map['reportTime'];
        }

        if (isset($map['reportTitle'])) {
            $model->reportTitle = $map['reportTitle'];
        }

        if (isset($map['skipTableNum'])) {
            $model->skipTableNum = $map['skipTableNum'];
        }

        if (isset($map['srcDsId'])) {
            $model->srcDsId = $map['srcDsId'];
        }

        if (isset($map['srcDsName'])) {
            $model->srcDsName = $map['srcDsName'];
        }

        if (isset($map['srcDsType'])) {
            $model->srcDsType = $map['srcDsType'];
        }

        if (isset($map['srcEngineId'])) {
            $model->srcEngineId = $map['srcEngineId'];
        }

        if (isset($map['srcEngineName'])) {
            $model->srcEngineName = $map['srcEngineName'];
        }

        if (isset($map['srcEngineType'])) {
            $model->srcEngineType = $map['srcEngineType'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['successfulTableNum'])) {
            $model->successfulTableNum = $map['successfulTableNum'];
        }

        if (isset($map['taskDescription'])) {
            $model->taskDescription = $map['taskDescription'];
        }

        if (isset($map['taskMode'])) {
            $model->taskMode = $map['taskMode'];
        }

        if (isset($map['taskName'])) {
            $model->taskName = $map['taskName'];
        }

        if (isset($map['templateName'])) {
            $model->templateName = $map['templateName'];
        }

        return $model;
    }
}
