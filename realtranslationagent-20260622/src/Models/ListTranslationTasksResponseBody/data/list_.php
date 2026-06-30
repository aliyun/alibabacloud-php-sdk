<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RealTranslationAgent\V20260622\Models\ListTranslationTasksResponseBody\data;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $completeTime;

    /**
     * @var float
     */
    public $costCredits;

    /**
     * @var int
     */
    public $costTime;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $creatorName;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $fileFormat;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $orgId;

    /**
     * @var string
     */
    public $originalFileName;

    /**
     * @var int
     */
    public $pageCount;

    /**
     * @var int
     */
    public $progress;

    /**
     * @var string
     */
    public $sourceLanguage;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $targetLanguage;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var string
     */
    public $template;

    /**
     * @var int
     */
    public $wordCount;

    /**
     * @var string
     */
    public $workSpaceId;
    protected $_name = [
        'completeTime' => 'CompleteTime',
        'costCredits' => 'CostCredits',
        'costTime' => 'CostTime',
        'creator' => 'Creator',
        'creatorName' => 'CreatorName',
        'errorMessage' => 'ErrorMessage',
        'fileFormat' => 'FileFormat',
        'fileName' => 'FileName',
        'gmtCreate' => 'GmtCreate',
        'orgId' => 'OrgId',
        'originalFileName' => 'OriginalFileName',
        'pageCount' => 'PageCount',
        'progress' => 'Progress',
        'sourceLanguage' => 'SourceLanguage',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'targetLanguage' => 'TargetLanguage',
        'taskId' => 'TaskId',
        'taskType' => 'TaskType',
        'template' => 'Template',
        'wordCount' => 'WordCount',
        'workSpaceId' => 'WorkSpaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->completeTime) {
            $res['CompleteTime'] = $this->completeTime;
        }

        if (null !== $this->costCredits) {
            $res['CostCredits'] = $this->costCredits;
        }

        if (null !== $this->costTime) {
            $res['CostTime'] = $this->costTime;
        }

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->creatorName) {
            $res['CreatorName'] = $this->creatorName;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->fileFormat) {
            $res['FileFormat'] = $this->fileFormat;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }

        if (null !== $this->originalFileName) {
            $res['OriginalFileName'] = $this->originalFileName;
        }

        if (null !== $this->pageCount) {
            $res['PageCount'] = $this->pageCount;
        }

        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }

        if (null !== $this->sourceLanguage) {
            $res['SourceLanguage'] = $this->sourceLanguage;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->targetLanguage) {
            $res['TargetLanguage'] = $this->targetLanguage;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        if (null !== $this->template) {
            $res['Template'] = $this->template;
        }

        if (null !== $this->wordCount) {
            $res['WordCount'] = $this->wordCount;
        }

        if (null !== $this->workSpaceId) {
            $res['WorkSpaceId'] = $this->workSpaceId;
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
        if (isset($map['CompleteTime'])) {
            $model->completeTime = $map['CompleteTime'];
        }

        if (isset($map['CostCredits'])) {
            $model->costCredits = $map['CostCredits'];
        }

        if (isset($map['CostTime'])) {
            $model->costTime = $map['CostTime'];
        }

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['CreatorName'])) {
            $model->creatorName = $map['CreatorName'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['FileFormat'])) {
            $model->fileFormat = $map['FileFormat'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }

        if (isset($map['OriginalFileName'])) {
            $model->originalFileName = $map['OriginalFileName'];
        }

        if (isset($map['PageCount'])) {
            $model->pageCount = $map['PageCount'];
        }

        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }

        if (isset($map['SourceLanguage'])) {
            $model->sourceLanguage = $map['SourceLanguage'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TargetLanguage'])) {
            $model->targetLanguage = $map['TargetLanguage'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        if (isset($map['Template'])) {
            $model->template = $map['Template'];
        }

        if (isset($map['WordCount'])) {
            $model->wordCount = $map['WordCount'];
        }

        if (isset($map['WorkSpaceId'])) {
            $model->workSpaceId = $map['WorkSpaceId'];
        }

        return $model;
    }
}
