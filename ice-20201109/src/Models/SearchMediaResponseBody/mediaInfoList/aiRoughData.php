<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaResponseBody\mediaInfoList;

use AlibabaCloud\Tea\Model;

class aiRoughData extends Model
{
    /**
     * @var string
     */
    public $aiCategoryLevel1;

    /**
     * @var string
     */
    public $aiJobId;

    /**
     * @var string
     */
    public $result;

    /**
     * @var string
     */
    public $saveType;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'aiCategoryLevel1' => 'AiCategoryLevel1',
        'aiJobId'          => 'AiJobId',
        'result'           => 'Result',
        'saveType'         => 'SaveType',
        'status'           => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aiCategoryLevel1) {
            $res['AiCategoryLevel1'] = $this->aiCategoryLevel1;
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
        if (isset($map['AiCategoryLevel1'])) {
            $model->aiCategoryLevel1 = $map['AiCategoryLevel1'];
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
