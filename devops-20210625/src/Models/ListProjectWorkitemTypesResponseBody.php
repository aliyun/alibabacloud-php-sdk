<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\SDK\Devops\V20210625\Models\ListProjectWorkitemTypesResponseBody\workitemTypes;
use AlibabaCloud\Tea\Model;

class ListProjectWorkitemTypesResponseBody extends Model
{
    /**
     * @description 错误返回码
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description 错误返回信息
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description openapi平台的request id
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 接口是否正常返回
     *
     * @var bool
     */
    public $success;

    /**
     * @description 工作项类型
     *
     * @var workitemTypes[]
     */
    public $workitemTypes;
    protected $_name = [
        'errorCode'     => 'errorCode',
        'errorMessage'  => 'errorMessage',
        'requestId'     => 'requestId',
        'success'       => 'success',
        'workitemTypes' => 'workitemTypes',
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
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->workitemTypes) {
            $res['workitemTypes'] = [];
            if (null !== $this->workitemTypes && \is_array($this->workitemTypes)) {
                $n = 0;
                foreach ($this->workitemTypes as $item) {
                    $res['workitemTypes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListProjectWorkitemTypesResponseBody
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
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }
        if (isset($map['workitemTypes'])) {
            if (!empty($map['workitemTypes'])) {
                $model->workitemTypes = [];
                $n                    = 0;
                foreach ($map['workitemTypes'] as $item) {
                    $model->workitemTypes[$n++] = null !== $item ? workitemTypes::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
