<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDIJobMetricsResponseBody\pagingInfo;

class ListDIJobMetricsResponseBody extends Model
{
    /**
     * @var pagingInfo
     */
    public $pagingInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'pagingInfo' => 'PagingInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->pagingInfo) {
            $this->pagingInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pagingInfo) {
            $res['PagingInfo'] = null !== $this->pagingInfo ? $this->pagingInfo->toArray($noStream) : $this->pagingInfo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['PagingInfo'])) {
            $model->pagingInfo = pagingInfo::fromMap($map['PagingInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
