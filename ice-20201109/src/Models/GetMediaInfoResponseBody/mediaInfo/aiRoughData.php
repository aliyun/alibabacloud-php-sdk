<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaInfoResponseBody\mediaInfo;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaInfoResponseBody\mediaInfo\aiRoughData\standardSmartTagJob;
use AlibabaCloud\Tea\Model;

class aiRoughData extends Model
{
    /**
     * @description The AI category. Valid values:
     *
     *   Life
     *   Good-looking
     *   Cute pets
     *   News
     *   Ads
     *   Environmental resources
     *   Automobile
     *
     * @var string
     */
    public $aiCategory;

    /**
     * @description The ID of the AI task.
     *
     * @example ****483915d4f2cd8ac20b48fb04****
     *
     * @var string
     */
    public $aiJobId;

    /**
     * @description The analysis result.
     *
     * @example https://sample-bucket.cn-shanghai.aliyuncs.com/result.json
     *
     * @var string
     */
    public $result;

    /**
     * @description The storage type. This parameter indicates the library in which the analysis data is stored. Valid values:
     *
     *   TEXT: the text library.
     *
     * @example TEXT
     *
     * @var string
     */
    public $saveType;

    /**
     * @description The information about the tagging job.
     *
     * @var standardSmartTagJob
     */
    public $standardSmartTagJob;

    /**
     * @description The analysis status. Valid values:
     *
     *   Analyzing
     *   AnalyzeSuccess
     *   AnalyzeFailed
     *   Saving
     *   SaveSuccess
     *   SaveFailed
     *   Deleting
     *   DeleteSuccess
     *   DeleteFailed
     *
     * @example Analyzing
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'aiCategory'          => 'AiCategory',
        'aiJobId'             => 'AiJobId',
        'result'              => 'Result',
        'saveType'            => 'SaveType',
        'standardSmartTagJob' => 'StandardSmartTagJob',
        'status'              => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aiCategory) {
            $res['AiCategory'] = $this->aiCategory;
        }
        if (null !== $this->aiJobId) {
            $res['AiJobId'] = $this->aiJobId;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->saveType) {
            $res['SaveType'] = $this->saveType;
        }
        if (null !== $this->standardSmartTagJob) {
            $res['StandardSmartTagJob'] = null !== $this->standardSmartTagJob ? $this->standardSmartTagJob->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return aiRoughData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AiCategory'])) {
            $model->aiCategory = $map['AiCategory'];
        }
        if (isset($map['AiJobId'])) {
            $model->aiJobId = $map['AiJobId'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['SaveType'])) {
            $model->saveType = $map['SaveType'];
        }
        if (isset($map['StandardSmartTagJob'])) {
            $model->standardSmartTagJob = standardSmartTagJob::fromMap($map['StandardSmartTagJob']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
