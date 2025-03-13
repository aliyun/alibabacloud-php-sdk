<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\SDK\Devops\V20210625\Models\ListPipelineGroupsResponseBody\pipelineGroups;
use AlibabaCloud\Tea\Model;

class ListPipelineGroupsResponseBody extends Model
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
     * @example ssaassasass
     *
     * @var string
     */
    public $nextToken;

    /**
     * @var pipelineGroups[]
     */
    public $pipelineGroups;

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

    /**
     * @example 50
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'errorCode'      => 'errorCode',
        'errorMessage'   => 'errorMessage',
        'nextToken'      => 'nextToken',
        'pipelineGroups' => 'pipelineGroups',
        'requestId'      => 'requestId',
        'success'        => 'success',
        'totalCount'     => 'totalCount',
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
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->pipelineGroups) {
            $res['pipelineGroups'] = [];
            if (null !== $this->pipelineGroups && \is_array($this->pipelineGroups)) {
                $n = 0;
                foreach ($this->pipelineGroups as $item) {
                    $res['pipelineGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPipelineGroupsResponseBody
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
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['pipelineGroups'])) {
            if (!empty($map['pipelineGroups'])) {
                $model->pipelineGroups = [];
                $n                     = 0;
                foreach ($map['pipelineGroups'] as $item) {
                    $model->pipelineGroups[$n++] = null !== $item ? pipelineGroups::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }
        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
