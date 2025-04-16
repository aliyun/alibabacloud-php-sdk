<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreatePipelineNodeResponseBody;

use AlibabaCloud\Dara\Model;

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
     * @var int
     */
    public $pipelineId;
    protected $_name = [
        'errorCodeList' => 'ErrorCodeList',
        'errorMessageList' => 'ErrorMessageList',
        'pipelineId' => 'PipelineId',
    ];

    public function validate()
    {
        if (\is_array($this->errorCodeList)) {
            Model::validateArray($this->errorCodeList);
        }
        if (\is_array($this->errorMessageList)) {
            Model::validateArray($this->errorMessageList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorCodeList) {
            if (\is_array($this->errorCodeList)) {
                $res['ErrorCodeList'] = [];
                $n1 = 0;
                foreach ($this->errorCodeList as $item1) {
                    $res['ErrorCodeList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->errorMessageList) {
            if (\is_array($this->errorMessageList)) {
                $res['ErrorMessageList'] = [];
                $n1 = 0;
                foreach ($this->errorMessageList as $item1) {
                    $res['ErrorMessageList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
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
        if (isset($map['ErrorCodeList'])) {
            if (!empty($map['ErrorCodeList'])) {
                $model->errorCodeList = [];
                $n1 = 0;
                foreach ($map['ErrorCodeList'] as $item1) {
                    $model->errorCodeList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ErrorMessageList'])) {
            if (!empty($map['ErrorMessageList'])) {
                $model->errorMessageList = [];
                $n1 = 0;
                foreach ($map['ErrorMessageList'] as $item1) {
                    $model->errorMessageList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }

        return $model;
    }
}
