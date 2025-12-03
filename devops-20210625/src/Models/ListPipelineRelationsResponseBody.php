<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListPipelineRelationsResponseBody\pipelineRelations;

class ListPipelineRelationsResponseBody extends Model
{
    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var pipelineRelations[]
     */
    public $pipelineRelations;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'errorCode' => 'errorCode',
        'errorMessage' => 'errorMessage',
        'pipelineRelations' => 'pipelineRelations',
        'requestId' => 'requestId',
        'success' => 'success',
    ];

    public function validate()
    {
        if (\is_array($this->pipelineRelations)) {
            Model::validateArray($this->pipelineRelations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }

        if (null !== $this->pipelineRelations) {
            if (\is_array($this->pipelineRelations)) {
                $res['pipelineRelations'] = [];
                $n1 = 0;
                foreach ($this->pipelineRelations as $item1) {
                    $res['pipelineRelations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['success'] = $this->success;
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
        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }

        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }

        if (isset($map['pipelineRelations'])) {
            if (!empty($map['pipelineRelations'])) {
                $model->pipelineRelations = [];
                $n1 = 0;
                foreach ($map['pipelineRelations'] as $item1) {
                    $model->pipelineRelations[$n1] = pipelineRelations::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        return $model;
    }
}
