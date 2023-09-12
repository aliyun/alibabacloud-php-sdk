<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20230627\Models\GetAppQuotaResponseBody;

use AlibabaCloud\SDK\Esserverless\V20230627\Models\GetAppQuotaResponseBody\result\limiterInfo;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var limiterInfo
     */
    public $limiterInfo;

    /**
     * @var mixed[]
     */
    public $quotaInfo;
    protected $_name = [
        'limiterInfo' => 'limiterInfo',
        'quotaInfo'   => 'quotaInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->limiterInfo) {
            $res['limiterInfo'] = null !== $this->limiterInfo ? $this->limiterInfo->toMap() : null;
        }
        if (null !== $this->quotaInfo) {
            $res['quotaInfo'] = $this->quotaInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['limiterInfo'])) {
            $model->limiterInfo = limiterInfo::fromMap($map['limiterInfo']);
        }
        if (isset($map['quotaInfo'])) {
            $model->quotaInfo = $map['quotaInfo'];
        }

        return $model;
    }
}
