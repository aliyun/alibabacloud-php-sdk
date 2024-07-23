<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaResponseBody\mediaInfoList;

use AlibabaCloud\Tea\Model;

class aiRoughData extends Model
{
    /**
     * @description The category of the AI job.
     *
     * @example TV series
     *
     * @var string
     */
    public $aiCategory;

    /**
     * @description The ID of the AI job.
     *
     * @example cd35b0b0025f71edbfcb472190a9xxxx
     *
     * @var string
     */
    public $aiJobId;

    /**
     * @description The results of the AI job.
     *
     * @example http://xxxx.json
     *
     * @var string
     */
    public $result;

    /**
     * @description The save type.
     *
     * @example TEXT
     *
     * @var string
     */
    public $saveType;

    /**
     * @description The data status.
     *
     * @example SaveSuccess
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
