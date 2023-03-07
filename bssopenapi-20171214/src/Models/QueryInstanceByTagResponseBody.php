<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryInstanceByTagResponseBody\tagResource;
use AlibabaCloud\Tea\Model;

class QueryInstanceByTagResponseBody extends Model
{
    /**
     * @description The status code returned.
     *
     * @example PARAM_ERROR
     *
     * @var string
     */
    public $code;

    /**
     * @description The error message returned.
     *
     * @example param is null
     *
     * @var string
     */
    public $message;

    /**
     * @description The token that determines the start point of the query. The return value is the value of the NextToken response parameter that was returned last time the QueryInstanceByTag operation was called.
     *
     * @example CAESEgoQCg4KCm
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the request.
     *
     * @example 9EC6C0B7-3397-5FAE-9915-8972CDDB1211
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request is successful.
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The instances returned.
     *
     * @var tagResource[]
     */
    public $tagResource;
    protected $_name = [
        'code'        => 'Code',
        'message'     => 'Message',
        'nextToken'   => 'NextToken',
        'requestId'   => 'RequestId',
        'success'     => 'Success',
        'tagResource' => 'TagResource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->tagResource) {
            $res['TagResource'] = [];
            if (null !== $this->tagResource && \is_array($this->tagResource)) {
                $n = 0;
                foreach ($this->tagResource as $item) {
                    $res['TagResource'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryInstanceByTagResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TagResource'])) {
            if (!empty($map['TagResource'])) {
                $model->tagResource = [];
                $n                  = 0;
                foreach ($map['TagResource'] as $item) {
                    $model->tagResource[$n++] = null !== $item ? tagResource::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
