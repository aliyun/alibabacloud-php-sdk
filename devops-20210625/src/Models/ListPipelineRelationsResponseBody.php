<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\SDK\Devops\V20210625\Models\ListPipelineRelationsResponseBody\pipelineRelations;
use AlibabaCloud\Tea\Model;

class ListPipelineRelationsResponseBody extends Model
{
    /**
     * @example ""
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example ""
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @var pipelineRelations[]
     */
    public $pipelineRelations;

    /**
     * @example ASSDS-ASSASX-XSAXSA-XSAXSAXS
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'errorCode'         => 'errorCode',
        'errorMessage'      => 'errorMessage',
        'pipelineRelations' => 'pipelineRelations',
        'requestId'         => 'requestId',
        'success'           => 'success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }
        if (null !== $this->pipelineRelations) {
            $res['pipelineRelations'] = [];
            if (null !== $this->pipelineRelations && \is_array($this->pipelineRelations)) {
                $n = 0;
                foreach ($this->pipelineRelations as $item) {
                    $res['pipelineRelations'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return ListPipelineRelationsResponseBody
     */
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
                $n                        = 0;
                foreach ($map['pipelineRelations'] as $item) {
                    $model->pipelineRelations[$n++] = null !== $item ? pipelineRelations::fromMap($item) : $item;
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
