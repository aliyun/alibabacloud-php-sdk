<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListAlertRulesResponseBody\pagingInfo;
use AlibabaCloud\Tea\Model;

class ListAlertRulesResponseBody extends Model
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
     * @example A6C6B486-E3A2-5D52-9E76-D9380485D946
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
     * @return ListAlertRulesResponseBody
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
