<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\SubmitAnalysisJobResponseBody;

use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitAnalysisJobResponseBody\analysisJob\analysisConfig;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitAnalysisJobResponseBody\analysisJob\inputFile;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitAnalysisJobResponseBody\analysisJob\MNSMessageResult;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitAnalysisJobResponseBody\analysisJob\templateList;
use AlibabaCloud\Tea\Model;

class analysisJob extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var int
     */
    public $percent;

    /**
     * @var string
     */
    public $state;

    /**
     * @var analysisConfig
     */
    public $analysisConfig;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $priority;

    /**
     * @var MNSMessageResult
     */
    public $MNSMessageResult;

    /**
     * @var templateList
     */
    public $templateList;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var string
     */
    public $code;

    /**
     * @var inputFile
     */
    public $inputFile;

    /**
     * @var string
     */
    public $pipelineId;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'creationTime'     => 'CreationTime',
        'percent'          => 'Percent',
        'state'            => 'State',
        'analysisConfig'   => 'AnalysisConfig',
        'message'          => 'Message',
        'priority'         => 'Priority',
        'MNSMessageResult' => 'MNSMessageResult',
        'templateList'     => 'TemplateList',
        'userData'         => 'UserData',
        'code'             => 'Code',
        'inputFile'        => 'InputFile',
        'pipelineId'       => 'PipelineId',
        'id'               => 'Id',
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
        if (null !== $this->percent) {
            $res['Percent'] = $this->percent;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->analysisConfig) {
            $res['AnalysisConfig'] = null !== $this->analysisConfig ? $this->analysisConfig->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->MNSMessageResult) {
            $res['MNSMessageResult'] = null !== $this->MNSMessageResult ? $this->MNSMessageResult->toMap() : null;
        }
        if (null !== $this->templateList) {
            $res['TemplateList'] = null !== $this->templateList ? $this->templateList->toMap() : null;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->inputFile) {
            $res['InputFile'] = null !== $this->inputFile ? $this->inputFile->toMap() : null;
        }
        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return analysisJob
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Percent'])) {
            $model->percent = $map['Percent'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['AnalysisConfig'])) {
            $model->analysisConfig = analysisConfig::fromMap($map['AnalysisConfig']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['MNSMessageResult'])) {
            $model->MNSMessageResult = MNSMessageResult::fromMap($map['MNSMessageResult']);
        }
        if (isset($map['TemplateList'])) {
            $model->templateList = templateList::fromMap($map['TemplateList']);
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['InputFile'])) {
            $model->inputFile = inputFile::fromMap($map['InputFile']);
        }
        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
