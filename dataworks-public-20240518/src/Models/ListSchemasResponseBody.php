<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListSchemasResponseBody\pagingInfo;
use AlibabaCloud\Tea\Model;

class ListSchemasResponseBody extends Model
{
    /**
     * @description The pagination information.
     *
     * @var pagingInfo
     */
    public $pagingInfo;

    /**
     * @description The request ID.
     *
     * @example 235BBA5E-3428-XXXXXX
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'pagingInfo' => 'PagingInfo',
        'requestId' => 'RequestId',
        'success' => 'Success',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->pagingInfo) {
            $res['PagingInfo'] = null !== $this->pagingInfo ? $this->pagingInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSchemasResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PagingInfo'])) {
            $model->pagingInfo = pagingInfo::fromMap($map['PagingInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
