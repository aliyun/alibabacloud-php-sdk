<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreatePipelineNodeResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $errorCodeList;

    /**
     * @var string[]
     */
    public $errorMessageList;

    /**
     * @example 33749
     *
     * @var int
     */
    public $pipelineId;
    protected $_name = [
        'errorCodeList' => 'ErrorCodeList',
        'errorMessageList' => 'ErrorMessageList',
        'pipelineId' => 'PipelineId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCodeList) {
            $res['ErrorCodeList'] = $this->errorCodeList;
        }
        if (null !== $this->errorMessageList) {
            $res['ErrorMessageList'] = $this->errorMessageList;
        }
        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCodeList'])) {
            if (!empty($map['ErrorCodeList'])) {
                $model->errorCodeList = $map['ErrorCodeList'];
            }
        }
        if (isset($map['ErrorMessageList'])) {
            if (!empty($map['ErrorMessageList'])) {
                $model->errorMessageList = $map['ErrorMessageList'];
            }
        }
        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }

        return $model;
    }
}
