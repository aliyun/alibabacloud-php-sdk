<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models\GetDataCheckReportOverviewResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $batchId;

    /**
     * @var int
     */
    public $checkColumnCount;

    /**
     * @var int
     */
    public $checkPtCount;

    /**
     * @var int
     */
    public $checkResult;

    /**
     * @var int
     */
    public $checkRowCount;

    /**
     * @var int
     */
    public $checkRowPassCount;

    /**
     * @var string
     */
    public $checkRowPassExport;

    /**
     * @var int
     */
    public $checkSqlNum;

    /**
     * @var int
     */
    public $checkTableNum;

    /**
     * @var string
     */
    public $checkTemplateId;

    /**
     * @var string
     */
    public $checkTemplateName;

    /**
     * @var int
     */
    public $checkType;

    /**
     * @var string
     */
    public $dstDsName;

    /**
     * @var string
     */
    public $dstDsType;

    /**
     * @var int
     */
    public $errorTableNum;

    /**
     * @var int
     */
    public $passColumnCount;

    /**
     * @var float
     */
    public $passColumnRate;

    /**
     * @var float
     */
    public $passProcess;

    /**
     * @var string
     */
    public $passProcessExport;

    /**
     * @var int
     */
    public $passPtNum;

    /**
     * @var string
     */
    public $passPtProcessExport;

    /**
     * @var int
     */
    public $passTableNum;

    /**
     * @var float
     */
    public $ptPassProcess;

    /**
     * @var string
     */
    public $reportGenerateMessage;

    /**
     * @var int
     */
    public $reportStatus;

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
    public $skipPtNum;

    /**
     * @var int
     */
    public $skipTableNum;

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
    public $taskCreateTime;

    /**
     * @var int
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskModifyTime;

    /**
     * @var string
     */
    public $taskName;
    protected $_name = [
        'batchId' => 'batchId',
        'checkColumnCount' => 'checkColumnCount',
        'checkPtCount' => 'checkPtCount',
        'checkResult' => 'checkResult',
        'checkRowCount' => 'checkRowCount',
        'checkRowPassCount' => 'checkRowPassCount',
        'checkRowPassExport' => 'checkRowPassExport',
        'checkSqlNum' => 'checkSqlNum',
        'checkTableNum' => 'checkTableNum',
        'checkTemplateId' => 'checkTemplateId',
        'checkTemplateName' => 'checkTemplateName',
        'checkType' => 'checkType',
        'dstDsName' => 'dstDsName',
        'dstDsType' => 'dstDsType',
        'errorTableNum' => 'errorTableNum',
        'passColumnCount' => 'passColumnCount',
        'passColumnRate' => 'passColumnRate',
        'passProcess' => 'passProcess',
        'passProcessExport' => 'passProcessExport',
        'passPtNum' => 'passPtNum',
        'passPtProcessExport' => 'passPtProcessExport',
        'passTableNum' => 'passTableNum',
        'ptPassProcess' => 'ptPassProcess',
        'reportGenerateMessage' => 'reportGenerateMessage',
        'reportStatus' => 'reportStatus',
        'reportTime' => 'reportTime',
        'reportTitle' => 'reportTitle',
        'skipPtNum' => 'skipPtNum',
        'skipTableNum' => 'skipTableNum',
        'srcDsName' => 'srcDsName',
        'srcDsType' => 'srcDsType',
        'taskCreateTime' => 'taskCreateTime',
        'taskId' => 'taskId',
        'taskModifyTime' => 'taskModifyTime',
        'taskName' => 'taskName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->batchId) {
            $res['batchId'] = $this->batchId;
        }

        if (null !== $this->checkColumnCount) {
            $res['checkColumnCount'] = $this->checkColumnCount;
        }

        if (null !== $this->checkPtCount) {
            $res['checkPtCount'] = $this->checkPtCount;
        }

        if (null !== $this->checkResult) {
            $res['checkResult'] = $this->checkResult;
        }

        if (null !== $this->checkRowCount) {
            $res['checkRowCount'] = $this->checkRowCount;
        }

        if (null !== $this->checkRowPassCount) {
            $res['checkRowPassCount'] = $this->checkRowPassCount;
        }

        if (null !== $this->checkRowPassExport) {
            $res['checkRowPassExport'] = $this->checkRowPassExport;
        }

        if (null !== $this->checkSqlNum) {
            $res['checkSqlNum'] = $this->checkSqlNum;
        }

        if (null !== $this->checkTableNum) {
            $res['checkTableNum'] = $this->checkTableNum;
        }

        if (null !== $this->checkTemplateId) {
            $res['checkTemplateId'] = $this->checkTemplateId;
        }

        if (null !== $this->checkTemplateName) {
            $res['checkTemplateName'] = $this->checkTemplateName;
        }

        if (null !== $this->checkType) {
            $res['checkType'] = $this->checkType;
        }

        if (null !== $this->dstDsName) {
            $res['dstDsName'] = $this->dstDsName;
        }

        if (null !== $this->dstDsType) {
            $res['dstDsType'] = $this->dstDsType;
        }

        if (null !== $this->errorTableNum) {
            $res['errorTableNum'] = $this->errorTableNum;
        }

        if (null !== $this->passColumnCount) {
            $res['passColumnCount'] = $this->passColumnCount;
        }

        if (null !== $this->passColumnRate) {
            $res['passColumnRate'] = $this->passColumnRate;
        }

        if (null !== $this->passProcess) {
            $res['passProcess'] = $this->passProcess;
        }

        if (null !== $this->passProcessExport) {
            $res['passProcessExport'] = $this->passProcessExport;
        }

        if (null !== $this->passPtNum) {
            $res['passPtNum'] = $this->passPtNum;
        }

        if (null !== $this->passPtProcessExport) {
            $res['passPtProcessExport'] = $this->passPtProcessExport;
        }

        if (null !== $this->passTableNum) {
            $res['passTableNum'] = $this->passTableNum;
        }

        if (null !== $this->ptPassProcess) {
            $res['ptPassProcess'] = $this->ptPassProcess;
        }

        if (null !== $this->reportGenerateMessage) {
            $res['reportGenerateMessage'] = $this->reportGenerateMessage;
        }

        if (null !== $this->reportStatus) {
            $res['reportStatus'] = $this->reportStatus;
        }

        if (null !== $this->reportTime) {
            $res['reportTime'] = $this->reportTime;
        }

        if (null !== $this->reportTitle) {
            $res['reportTitle'] = $this->reportTitle;
        }

        if (null !== $this->skipPtNum) {
            $res['skipPtNum'] = $this->skipPtNum;
        }

        if (null !== $this->skipTableNum) {
            $res['skipTableNum'] = $this->skipTableNum;
        }

        if (null !== $this->srcDsName) {
            $res['srcDsName'] = $this->srcDsName;
        }

        if (null !== $this->srcDsType) {
            $res['srcDsType'] = $this->srcDsType;
        }

        if (null !== $this->taskCreateTime) {
            $res['taskCreateTime'] = $this->taskCreateTime;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        if (null !== $this->taskModifyTime) {
            $res['taskModifyTime'] = $this->taskModifyTime;
        }

        if (null !== $this->taskName) {
            $res['taskName'] = $this->taskName;
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
        if (isset($map['batchId'])) {
            $model->batchId = $map['batchId'];
        }

        if (isset($map['checkColumnCount'])) {
            $model->checkColumnCount = $map['checkColumnCount'];
        }

        if (isset($map['checkPtCount'])) {
            $model->checkPtCount = $map['checkPtCount'];
        }

        if (isset($map['checkResult'])) {
            $model->checkResult = $map['checkResult'];
        }

        if (isset($map['checkRowCount'])) {
            $model->checkRowCount = $map['checkRowCount'];
        }

        if (isset($map['checkRowPassCount'])) {
            $model->checkRowPassCount = $map['checkRowPassCount'];
        }

        if (isset($map['checkRowPassExport'])) {
            $model->checkRowPassExport = $map['checkRowPassExport'];
        }

        if (isset($map['checkSqlNum'])) {
            $model->checkSqlNum = $map['checkSqlNum'];
        }

        if (isset($map['checkTableNum'])) {
            $model->checkTableNum = $map['checkTableNum'];
        }

        if (isset($map['checkTemplateId'])) {
            $model->checkTemplateId = $map['checkTemplateId'];
        }

        if (isset($map['checkTemplateName'])) {
            $model->checkTemplateName = $map['checkTemplateName'];
        }

        if (isset($map['checkType'])) {
            $model->checkType = $map['checkType'];
        }

        if (isset($map['dstDsName'])) {
            $model->dstDsName = $map['dstDsName'];
        }

        if (isset($map['dstDsType'])) {
            $model->dstDsType = $map['dstDsType'];
        }

        if (isset($map['errorTableNum'])) {
            $model->errorTableNum = $map['errorTableNum'];
        }

        if (isset($map['passColumnCount'])) {
            $model->passColumnCount = $map['passColumnCount'];
        }

        if (isset($map['passColumnRate'])) {
            $model->passColumnRate = $map['passColumnRate'];
        }

        if (isset($map['passProcess'])) {
            $model->passProcess = $map['passProcess'];
        }

        if (isset($map['passProcessExport'])) {
            $model->passProcessExport = $map['passProcessExport'];
        }

        if (isset($map['passPtNum'])) {
            $model->passPtNum = $map['passPtNum'];
        }

        if (isset($map['passPtProcessExport'])) {
            $model->passPtProcessExport = $map['passPtProcessExport'];
        }

        if (isset($map['passTableNum'])) {
            $model->passTableNum = $map['passTableNum'];
        }

        if (isset($map['ptPassProcess'])) {
            $model->ptPassProcess = $map['ptPassProcess'];
        }

        if (isset($map['reportGenerateMessage'])) {
            $model->reportGenerateMessage = $map['reportGenerateMessage'];
        }

        if (isset($map['reportStatus'])) {
            $model->reportStatus = $map['reportStatus'];
        }

        if (isset($map['reportTime'])) {
            $model->reportTime = $map['reportTime'];
        }

        if (isset($map['reportTitle'])) {
            $model->reportTitle = $map['reportTitle'];
        }

        if (isset($map['skipPtNum'])) {
            $model->skipPtNum = $map['skipPtNum'];
        }

        if (isset($map['skipTableNum'])) {
            $model->skipTableNum = $map['skipTableNum'];
        }

        if (isset($map['srcDsName'])) {
            $model->srcDsName = $map['srcDsName'];
        }

        if (isset($map['srcDsType'])) {
            $model->srcDsType = $map['srcDsType'];
        }

        if (isset($map['taskCreateTime'])) {
            $model->taskCreateTime = $map['taskCreateTime'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        if (isset($map['taskModifyTime'])) {
            $model->taskModifyTime = $map['taskModifyTime'];
        }

        if (isset($map['taskName'])) {
            $model->taskName = $map['taskName'];
        }

        return $model;
    }
}
