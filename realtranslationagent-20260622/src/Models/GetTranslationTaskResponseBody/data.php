<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RealTranslationAgent\V20260622\Models\GetTranslationTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RealTranslationAgent\V20260622\Models\GetTranslationTaskResponseBody\data\config;
use AlibabaCloud\SDK\RealTranslationAgent\V20260622\Models\GetTranslationTaskResponseBody\data\extractedTerms;

class data extends Model
{
    /**
     * @var string
     */
    public $baseTaskId;

    /**
     * @var config
     */
    public $config;

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
    public $errorMessage;

    /**
     * @var float
     */
    public $estimatedCostCredits;

    /**
     * @var int
     */
    public $estimatedTime;

    /**
     * @var extractedTerms[]
     */
    public $extractedTerms;

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
    public $finishedAt;

    /**
     * @var string[][]
     */
    public $fonts;

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
    public $status;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var int
     */
    public $wordCount;

    /**
     * @var string
     */
    public $workSpaceId;
    protected $_name = [
        'baseTaskId' => 'BaseTaskId',
        'config' => 'Config',
        'costCredits' => 'CostCredits',
        'costTime' => 'CostTime',
        'errorMessage' => 'ErrorMessage',
        'estimatedCostCredits' => 'EstimatedCostCredits',
        'estimatedTime' => 'EstimatedTime',
        'extractedTerms' => 'ExtractedTerms',
        'fileFormat' => 'FileFormat',
        'fileName' => 'FileName',
        'finishedAt' => 'FinishedAt',
        'fonts' => 'Fonts',
        'orgId' => 'OrgId',
        'originalFileName' => 'OriginalFileName',
        'pageCount' => 'PageCount',
        'progress' => 'Progress',
        'status' => 'Status',
        'taskId' => 'TaskId',
        'taskType' => 'TaskType',
        'wordCount' => 'WordCount',
        'workSpaceId' => 'WorkSpaceId',
    ];

    public function validate()
    {
        if (null !== $this->config) {
            $this->config->validate();
        }
        if (\is_array($this->extractedTerms)) {
            Model::validateArray($this->extractedTerms);
        }
        if (\is_array($this->fonts)) {
            Model::validateArray($this->fonts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baseTaskId) {
            $res['BaseTaskId'] = $this->baseTaskId;
        }

        if (null !== $this->config) {
            $res['Config'] = null !== $this->config ? $this->config->toArray($noStream) : $this->config;
        }

        if (null !== $this->costCredits) {
            $res['CostCredits'] = $this->costCredits;
        }

        if (null !== $this->costTime) {
            $res['CostTime'] = $this->costTime;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->estimatedCostCredits) {
            $res['EstimatedCostCredits'] = $this->estimatedCostCredits;
        }

        if (null !== $this->estimatedTime) {
            $res['EstimatedTime'] = $this->estimatedTime;
        }

        if (null !== $this->extractedTerms) {
            if (\is_array($this->extractedTerms)) {
                $res['ExtractedTerms'] = [];
                $n1 = 0;
                foreach ($this->extractedTerms as $item1) {
                    $res['ExtractedTerms'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->fileFormat) {
            $res['FileFormat'] = $this->fileFormat;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->finishedAt) {
            $res['FinishedAt'] = $this->finishedAt;
        }

        if (null !== $this->fonts) {
            if (\is_array($this->fonts)) {
                $res['Fonts'] = [];
                foreach ($this->fonts as $key1 => $value1) {
                    if (\is_array($value1)) {
                        $res['Fonts'][$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $res['Fonts'][$key1][$n2] = $item2;
                            ++$n2;
                        }
                    }
                }
            }
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

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
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
        if (isset($map['BaseTaskId'])) {
            $model->baseTaskId = $map['BaseTaskId'];
        }

        if (isset($map['Config'])) {
            $model->config = config::fromMap($map['Config']);
        }

        if (isset($map['CostCredits'])) {
            $model->costCredits = $map['CostCredits'];
        }

        if (isset($map['CostTime'])) {
            $model->costTime = $map['CostTime'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['EstimatedCostCredits'])) {
            $model->estimatedCostCredits = $map['EstimatedCostCredits'];
        }

        if (isset($map['EstimatedTime'])) {
            $model->estimatedTime = $map['EstimatedTime'];
        }

        if (isset($map['ExtractedTerms'])) {
            if (!empty($map['ExtractedTerms'])) {
                $model->extractedTerms = [];
                $n1 = 0;
                foreach ($map['ExtractedTerms'] as $item1) {
                    $model->extractedTerms[$n1] = extractedTerms::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['FileFormat'])) {
            $model->fileFormat = $map['FileFormat'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['FinishedAt'])) {
            $model->finishedAt = $map['FinishedAt'];
        }

        if (isset($map['Fonts'])) {
            if (!empty($map['Fonts'])) {
                $model->fonts = [];
                foreach ($map['Fonts'] as $key1 => $value1) {
                    if (!empty($value1)) {
                        $model->fonts[$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $model->fonts[$key1][$n2] = $item2;
                            ++$n2;
                        }
                    }
                }
            }
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

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
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
