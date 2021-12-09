<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMcuJobResponseBody\jobResult;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMcuJobResponseBody\jobResult\job\asrResult;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMcuJobResponseBody\jobResult\job\categoryResult;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMcuJobResponseBody\jobResult\job\faceResult;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMcuJobResponseBody\jobResult\job\input;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMcuJobResponseBody\jobResult\job\ocrResult;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMcuJobResponseBody\jobResult\job\subTaskInfo;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMcuJobResponseBody\jobResult\job\tagResult;
use AlibabaCloud\Tea\Model;

class job extends Model
{
    /**
     * @var asrResult
     */
    public $asrResult;

    /**
     * @var categoryResult
     */
    public $categoryResult;

    /**
     * @var faceResult
     */
    public $faceResult;

    /**
     * @var input
     */
    public $input;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var ocrResult
     */
    public $ocrResult;

    /**
     * @var subTaskInfo
     */
    public $subTaskInfo;

    /**
     * @var tagResult
     */
    public $tagResult;

    /**
     * @var string
     */
    public $template;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'asrResult'      => 'AsrResult',
        'categoryResult' => 'CategoryResult',
        'faceResult'     => 'FaceResult',
        'input'          => 'Input',
        'jobId'          => 'JobId',
        'ocrResult'      => 'OcrResult',
        'subTaskInfo'    => 'SubTaskInfo',
        'tagResult'      => 'TagResult',
        'template'       => 'Template',
        'templateId'     => 'TemplateId',
        'userData'       => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asrResult) {
            $res['AsrResult'] = null !== $this->asrResult ? $this->asrResult->toMap() : null;
        }
        if (null !== $this->categoryResult) {
            $res['CategoryResult'] = null !== $this->categoryResult ? $this->categoryResult->toMap() : null;
        }
        if (null !== $this->faceResult) {
            $res['FaceResult'] = null !== $this->faceResult ? $this->faceResult->toMap() : null;
        }
        if (null !== $this->input) {
            $res['Input'] = null !== $this->input ? $this->input->toMap() : null;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->ocrResult) {
            $res['OcrResult'] = null !== $this->ocrResult ? $this->ocrResult->toMap() : null;
        }
        if (null !== $this->subTaskInfo) {
            $res['SubTaskInfo'] = null !== $this->subTaskInfo ? $this->subTaskInfo->toMap() : null;
        }
        if (null !== $this->tagResult) {
            $res['TagResult'] = null !== $this->tagResult ? $this->tagResult->toMap() : null;
        }
        if (null !== $this->template) {
            $res['Template'] = $this->template;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return job
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AsrResult'])) {
            $model->asrResult = asrResult::fromMap($map['AsrResult']);
        }
        if (isset($map['CategoryResult'])) {
            $model->categoryResult = categoryResult::fromMap($map['CategoryResult']);
        }
        if (isset($map['FaceResult'])) {
            $model->faceResult = faceResult::fromMap($map['FaceResult']);
        }
        if (isset($map['Input'])) {
            $model->input = input::fromMap($map['Input']);
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['OcrResult'])) {
            $model->ocrResult = ocrResult::fromMap($map['OcrResult']);
        }
        if (isset($map['SubTaskInfo'])) {
            $model->subTaskInfo = subTaskInfo::fromMap($map['SubTaskInfo']);
        }
        if (isset($map['TagResult'])) {
            $model->tagResult = tagResult::fromMap($map['TagResult']);
        }
        if (isset($map['Template'])) {
            $model->template = $map['Template'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
