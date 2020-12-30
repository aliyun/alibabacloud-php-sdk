<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Multimediaai\V20190810\Models\GetTaskResultResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $errorName;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $videoName;

    /**
     * @var int
     */
    public $analysisUseTime;

    /**
     * @var string
     */
    public $processResultUrl;

    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string
     */
    public $errorReason;

    /**
     * @var string
     */
    public $videoUrl;
    protected $_name = [
        'errorName'        => 'ErrorName',
        'errorMessage'     => 'ErrorMessage',
        'errorCode'        => 'ErrorCode',
        'videoName'        => 'VideoName',
        'analysisUseTime'  => 'AnalysisUseTime',
        'processResultUrl' => 'ProcessResultUrl',
        'applicationId'    => 'ApplicationId',
        'errorReason'      => 'ErrorReason',
        'videoUrl'         => 'VideoUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorName) {
            $res['ErrorName'] = $this->errorName;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->videoName) {
            $res['VideoName'] = $this->videoName;
        }
        if (null !== $this->analysisUseTime) {
            $res['AnalysisUseTime'] = $this->analysisUseTime;
        }
        if (null !== $this->processResultUrl) {
            $res['ProcessResultUrl'] = $this->processResultUrl;
        }
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }
        if (null !== $this->errorReason) {
            $res['ErrorReason'] = $this->errorReason;
        }
        if (null !== $this->videoUrl) {
            $res['VideoUrl'] = $this->videoUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorName'])) {
            $model->errorName = $map['ErrorName'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['VideoName'])) {
            $model->videoName = $map['VideoName'];
        }
        if (isset($map['AnalysisUseTime'])) {
            $model->analysisUseTime = $map['AnalysisUseTime'];
        }
        if (isset($map['ProcessResultUrl'])) {
            $model->processResultUrl = $map['ProcessResultUrl'];
        }
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }
        if (isset($map['ErrorReason'])) {
            $model->errorReason = $map['ErrorReason'];
        }
        if (isset($map['VideoUrl'])) {
            $model->videoUrl = $map['VideoUrl'];
        }

        return $model;
    }
}
