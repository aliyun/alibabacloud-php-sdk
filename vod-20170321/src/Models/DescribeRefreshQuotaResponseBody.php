<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeRefreshQuotaResponseBody\refreshCacheQuota;

class DescribeRefreshQuotaResponseBody extends Model
{
    /**
     * @var refreshCacheQuota
     */
    public $refreshCacheQuota;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'refreshCacheQuota' => 'RefreshCacheQuota',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->refreshCacheQuota) {
            $this->refreshCacheQuota->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->refreshCacheQuota) {
            $res['RefreshCacheQuota'] = null !== $this->refreshCacheQuota ? $this->refreshCacheQuota->toArray($noStream) : $this->refreshCacheQuota;
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
        if (isset($map['RefreshCacheQuota'])) {
            $model->refreshCacheQuota = refreshCacheQuota::fromMap($map['RefreshCacheQuota']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
