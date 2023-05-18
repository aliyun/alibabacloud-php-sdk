<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaInfoResponseBody\mediaInfo;

use AlibabaCloud\Tea\Model;

class aiRoughData extends Model
{
    /**
     * @var string
     */
    public $aiCategory;

    /**
     * @example ****483915d4f2cd8ac20b48fb04****
     *
     * @var string
     */
    public $aiJobId;

    /**
     * @example https://sample-bucket.cn-shanghai.aliyuncs.com/result.json
     *
     * @var string
     */
    public $result;

    /**
     * @example TEXT
     *
     * @var string
     */
    public $saveType;

    /**
     * @example Analyzing
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'aiCategory' => 'AiCategory',
        'aiJobId'    => 'AiJobId',
        'result'     => 'Result',
        'saveType'   => 'SaveType',
        'status'     => 'Status',
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
