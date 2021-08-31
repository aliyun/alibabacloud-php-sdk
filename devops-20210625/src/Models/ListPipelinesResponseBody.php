<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\SDK\Devops\V20210625\Models\ListPipelinesResponseBody\pipelines;
use AlibabaCloud\Tea\Model;

class ListPipelinesResponseBody extends Model
{
    /**
     * @description 请求id，每次请求都是唯一值，便于后续排查问题
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 错误信息
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description 错误码
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description true 接口调用成功，false 接口调用失败
     *
     * @var bool
     */
    public $success;

    /**
     * @description 总数
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description 分页Token
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description 流水线
     *
     * @var pipelines[]
     */
    public $pipelines;
    protected $_name = [
        'requestId'    => 'requestId',
        'errorMessage' => 'errorMessage',
        'errorCode'    => 'errorCode',
        'success'      => 'success',
        'totalCount'   => 'totalCount',
        'nextToken'    => 'nextToken',
        'pipelines'    => 'pipelines',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }
        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->pipelines) {
            $res['pipelines'] = [];
            if (null !== $this->pipelines && \is_array($this->pipelines)) {
                $n = 0;
                foreach ($this->pipelines as $item) {
                    $res['pipelines'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPipelinesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }
        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }
        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['pipelines'])) {
            if (!empty($map['pipelines'])) {
                $model->pipelines = [];
                $n                = 0;
                foreach ($map['pipelines'] as $item) {
                    $model->pipelines[$n++] = null !== $item ? pipelines::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
