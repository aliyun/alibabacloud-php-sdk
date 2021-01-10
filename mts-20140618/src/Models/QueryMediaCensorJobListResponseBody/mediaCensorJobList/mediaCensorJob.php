<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaCensorJobListResponseBody\mediaCensorJobList;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaCensorJobListResponseBody\mediaCensorJobList\mediaCensorJob\barrageCensorResult;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaCensorJobListResponseBody\mediaCensorJobList\mediaCensorJob\coverImageCensorResults;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaCensorJobListResponseBody\mediaCensorJobList\mediaCensorJob\descCensorResult;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaCensorJobListResponseBody\mediaCensorJobList\mediaCensorJob\input;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaCensorJobListResponseBody\mediaCensorJobList\mediaCensorJob\titleCensorResult;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaCensorJobListResponseBody\mediaCensorJobList\mediaCensorJob\vensorCensorResult;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaCensorJobListResponseBody\mediaCensorJobList\mediaCensorJob\videoCensorConfig;
use AlibabaCloud\Tea\Model;

class mediaCensorJob extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $finishTime;

    /**
     * @var string
     */
    public $suggestion;

    /**
     * @var coverImageCensorResults
     */
    public $coverImageCensorResults;

    /**
     * @var string
     */
    public $state;

    /**
     * @var titleCensorResult
     */
    public $titleCensorResult;

    /**
     * @var string
     */
    public $message;

    /**
     * @var input
     */
    public $input;

    /**
     * @var barrageCensorResult
     */
    public $barrageCensorResult;

    /**
     * @var descCensorResult
     */
    public $descCensorResult;

    /**
     * @var videoCensorConfig
     */
    public $videoCensorConfig;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var string
     */
    public $code;

    /**
     * @var vensorCensorResult
     */
    public $vensorCensorResult;

    /**
     * @var string
     */
    public $pipelineId;
    protected $_name = [
        'creationTime'            => 'CreationTime',
        'finishTime'              => 'FinishTime',
        'suggestion'              => 'Suggestion',
        'coverImageCensorResults' => 'CoverImageCensorResults',
        'state'                   => 'State',
        'titleCensorResult'       => 'TitleCensorResult',
        'message'                 => 'Message',
        'input'                   => 'Input',
        'barrageCensorResult'     => 'BarrageCensorResult',
        'descCensorResult'        => 'DescCensorResult',
        'videoCensorConfig'       => 'VideoCensorConfig',
        'jobId'                   => 'JobId',
        'userData'                => 'UserData',
        'code'                    => 'Code',
        'vensorCensorResult'      => 'VensorCensorResult',
        'pipelineId'              => 'PipelineId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
        }
        if (null !== $this->coverImageCensorResults) {
            $res['CoverImageCensorResults'] = null !== $this->coverImageCensorResults ? $this->coverImageCensorResults->toMap() : null;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->titleCensorResult) {
            $res['TitleCensorResult'] = null !== $this->titleCensorResult ? $this->titleCensorResult->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->input) {
            $res['Input'] = null !== $this->input ? $this->input->toMap() : null;
        }
        if (null !== $this->barrageCensorResult) {
            $res['BarrageCensorResult'] = null !== $this->barrageCensorResult ? $this->barrageCensorResult->toMap() : null;
        }
        if (null !== $this->descCensorResult) {
            $res['DescCensorResult'] = null !== $this->descCensorResult ? $this->descCensorResult->toMap() : null;
        }
        if (null !== $this->videoCensorConfig) {
            $res['VideoCensorConfig'] = null !== $this->videoCensorConfig ? $this->videoCensorConfig->toMap() : null;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->vensorCensorResult) {
            $res['VensorCensorResult'] = null !== $this->vensorCensorResult ? $this->vensorCensorResult->toMap() : null;
        }
        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mediaCensorJob
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }
        if (isset($map['CoverImageCensorResults'])) {
            $model->coverImageCensorResults = coverImageCensorResults::fromMap($map['CoverImageCensorResults']);
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['TitleCensorResult'])) {
            $model->titleCensorResult = titleCensorResult::fromMap($map['TitleCensorResult']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Input'])) {
            $model->input = input::fromMap($map['Input']);
        }
        if (isset($map['BarrageCensorResult'])) {
            $model->barrageCensorResult = barrageCensorResult::fromMap($map['BarrageCensorResult']);
        }
        if (isset($map['DescCensorResult'])) {
            $model->descCensorResult = descCensorResult::fromMap($map['DescCensorResult']);
        }
        if (isset($map['VideoCensorConfig'])) {
            $model->videoCensorConfig = videoCensorConfig::fromMap($map['VideoCensorConfig']);
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['VensorCensorResult'])) {
            $model->vensorCensorResult = vensorCensorResult::fromMap($map['VensorCensorResult']);
        }
        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }

        return $model;
    }
}
