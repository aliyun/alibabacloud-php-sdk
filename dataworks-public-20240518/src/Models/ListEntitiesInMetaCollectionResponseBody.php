<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListEntitiesInMetaCollectionResponseBody\pagingInfo;
use AlibabaCloud\Tea\Model;

class ListEntitiesInMetaCollectionResponseBody extends Model
{
    /**
     * @description The pagination information.
     *
     * @var pagingInfo
     */
    public $pagingInfo;

    /**
     * @description Id of the request
     *
     * @example F05080B0-CCE6-5D22-B284-34A51C5D4E28
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'pagingInfo' => 'PagingInfo',
        'requestId' => 'RequestId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListEntitiesInMetaCollectionResponseBody
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

        return $model;
    }
}
