<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DtsAI\V20260401\Models;

use AlibabaCloud\Dara\Model;

class CreateDocParserJobRequest extends Model
{
    /**
     * @var string
     */
    public $agentName;

    /**
     * @var string
     */
    public $asrLanguage;

    /**
     * @var bool
     */
    public $audioClipOutput;

    /**
     * @var int
     */
    public $audioWindowSeconds;

    /**
     * @var bool
     */
    public $chunkSummary;

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
    public $fileUrl;

    /**
     * @var bool
     */
    public $frameOutput;

    /**
     * @var bool
     */
    public $globalSummary;

    /**
     * @var string
     */
    public $imageMode;

    /**
     * @var string
     */
    public $imageUnderstanding;

    /**
     * @var int
     */
    public $mediaChunkIntervalSeconds;

    /**
     * @var string
     */
    public $mediaChunkStrategy;

    /**
     * @var float
     */
    public $mediaFramesPerMinute;

    /**
     * @var int
     */
    public $mediaMaxFrameBudget;

    /**
     * @var int
     */
    public $mediaMinFrameBudget;

    /**
     * @var string
     */
    public $ossFileUrl;

    /**
     * @var string
     */
    public $outputFormat;

    /**
     * @var string
     */
    public $parseScene;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $responseMode;

    /**
     * @var string
     */
    public $resultType;

    /**
     * @var string
     */
    public $tableFormat;
    protected $_name = [
        'agentName' => 'AgentName',
        'asrLanguage' => 'AsrLanguage',
        'audioClipOutput' => 'AudioClipOutput',
        'audioWindowSeconds' => 'AudioWindowSeconds',
        'chunkSummary' => 'ChunkSummary',
        'fileFormat' => 'FileFormat',
        'fileName' => 'FileName',
        'fileUrl' => 'FileUrl',
        'frameOutput' => 'FrameOutput',
        'globalSummary' => 'GlobalSummary',
        'imageMode' => 'ImageMode',
        'imageUnderstanding' => 'ImageUnderstanding',
        'mediaChunkIntervalSeconds' => 'MediaChunkIntervalSeconds',
        'mediaChunkStrategy' => 'MediaChunkStrategy',
        'mediaFramesPerMinute' => 'MediaFramesPerMinute',
        'mediaMaxFrameBudget' => 'MediaMaxFrameBudget',
        'mediaMinFrameBudget' => 'MediaMinFrameBudget',
        'ossFileUrl' => 'OssFileUrl',
        'outputFormat' => 'OutputFormat',
        'parseScene' => 'ParseScene',
        'regionId' => 'RegionId',
        'responseMode' => 'ResponseMode',
        'resultType' => 'ResultType',
        'tableFormat' => 'TableFormat',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentName) {
            $res['AgentName'] = $this->agentName;
        }

        if (null !== $this->asrLanguage) {
            $res['AsrLanguage'] = $this->asrLanguage;
        }

        if (null !== $this->audioClipOutput) {
            $res['AudioClipOutput'] = $this->audioClipOutput;
        }

        if (null !== $this->audioWindowSeconds) {
            $res['AudioWindowSeconds'] = $this->audioWindowSeconds;
        }

        if (null !== $this->chunkSummary) {
            $res['ChunkSummary'] = $this->chunkSummary;
        }

        if (null !== $this->fileFormat) {
            $res['FileFormat'] = $this->fileFormat;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }

        if (null !== $this->frameOutput) {
            $res['FrameOutput'] = $this->frameOutput;
        }

        if (null !== $this->globalSummary) {
            $res['GlobalSummary'] = $this->globalSummary;
        }

        if (null !== $this->imageMode) {
            $res['ImageMode'] = $this->imageMode;
        }

        if (null !== $this->imageUnderstanding) {
            $res['ImageUnderstanding'] = $this->imageUnderstanding;
        }

        if (null !== $this->mediaChunkIntervalSeconds) {
            $res['MediaChunkIntervalSeconds'] = $this->mediaChunkIntervalSeconds;
        }

        if (null !== $this->mediaChunkStrategy) {
            $res['MediaChunkStrategy'] = $this->mediaChunkStrategy;
        }

        if (null !== $this->mediaFramesPerMinute) {
            $res['MediaFramesPerMinute'] = $this->mediaFramesPerMinute;
        }

        if (null !== $this->mediaMaxFrameBudget) {
            $res['MediaMaxFrameBudget'] = $this->mediaMaxFrameBudget;
        }

        if (null !== $this->mediaMinFrameBudget) {
            $res['MediaMinFrameBudget'] = $this->mediaMinFrameBudget;
        }

        if (null !== $this->ossFileUrl) {
            $res['OssFileUrl'] = $this->ossFileUrl;
        }

        if (null !== $this->outputFormat) {
            $res['OutputFormat'] = $this->outputFormat;
        }

        if (null !== $this->parseScene) {
            $res['ParseScene'] = $this->parseScene;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->responseMode) {
            $res['ResponseMode'] = $this->responseMode;
        }

        if (null !== $this->resultType) {
            $res['ResultType'] = $this->resultType;
        }

        if (null !== $this->tableFormat) {
            $res['TableFormat'] = $this->tableFormat;
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
        if (isset($map['AgentName'])) {
            $model->agentName = $map['AgentName'];
        }

        if (isset($map['AsrLanguage'])) {
            $model->asrLanguage = $map['AsrLanguage'];
        }

        if (isset($map['AudioClipOutput'])) {
            $model->audioClipOutput = $map['AudioClipOutput'];
        }

        if (isset($map['AudioWindowSeconds'])) {
            $model->audioWindowSeconds = $map['AudioWindowSeconds'];
        }

        if (isset($map['ChunkSummary'])) {
            $model->chunkSummary = $map['ChunkSummary'];
        }

        if (isset($map['FileFormat'])) {
            $model->fileFormat = $map['FileFormat'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }

        if (isset($map['FrameOutput'])) {
            $model->frameOutput = $map['FrameOutput'];
        }

        if (isset($map['GlobalSummary'])) {
            $model->globalSummary = $map['GlobalSummary'];
        }

        if (isset($map['ImageMode'])) {
            $model->imageMode = $map['ImageMode'];
        }

        if (isset($map['ImageUnderstanding'])) {
            $model->imageUnderstanding = $map['ImageUnderstanding'];
        }

        if (isset($map['MediaChunkIntervalSeconds'])) {
            $model->mediaChunkIntervalSeconds = $map['MediaChunkIntervalSeconds'];
        }

        if (isset($map['MediaChunkStrategy'])) {
            $model->mediaChunkStrategy = $map['MediaChunkStrategy'];
        }

        if (isset($map['MediaFramesPerMinute'])) {
            $model->mediaFramesPerMinute = $map['MediaFramesPerMinute'];
        }

        if (isset($map['MediaMaxFrameBudget'])) {
            $model->mediaMaxFrameBudget = $map['MediaMaxFrameBudget'];
        }

        if (isset($map['MediaMinFrameBudget'])) {
            $model->mediaMinFrameBudget = $map['MediaMinFrameBudget'];
        }

        if (isset($map['OssFileUrl'])) {
            $model->ossFileUrl = $map['OssFileUrl'];
        }

        if (isset($map['OutputFormat'])) {
            $model->outputFormat = $map['OutputFormat'];
        }

        if (isset($map['ParseScene'])) {
            $model->parseScene = $map['ParseScene'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResponseMode'])) {
            $model->responseMode = $map['ResponseMode'];
        }

        if (isset($map['ResultType'])) {
            $model->resultType = $map['ResultType'];
        }

        if (isset($map['TableFormat'])) {
            $model->tableFormat = $map['TableFormat'];
        }

        return $model;
    }
}
