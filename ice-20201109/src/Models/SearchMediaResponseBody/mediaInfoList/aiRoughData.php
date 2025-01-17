<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaResponseBody\mediaInfoList;

use AlibabaCloud\Dara\Model;

class aiRoughData extends Model
{
    /**
     * @var string
     */
    public $aiCategory;
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
        'aiCategory' => 'AiCategory',
        'aiJobId'    => 'AiJobId',
        'result'     => 'Result',
        'saveType'   => 'SaveType',
        'status'     => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
