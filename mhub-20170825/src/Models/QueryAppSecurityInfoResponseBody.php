<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mhub\V20170825\Models;

use AlibabaCloud\SDK\Mhub\V20170825\Models\QueryAppSecurityInfoResponseBody\appSecurityInfo;
use AlibabaCloud\Tea\Model;

class QueryAppSecurityInfoResponseBody extends Model
{
    /**
     * @var appSecurityInfo
     */
    public $appSecurityInfo;

    /**
     * @example 126D4DDD-05A5-49B1-B18C-39C4A929BFB2
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'appSecurityInfo' => 'AppSecurityInfo',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appSecurityInfo) {
            $res['AppSecurityInfo'] = null !== $this->appSecurityInfo ? $this->appSecurityInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryAppSecurityInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppSecurityInfo'])) {
            $model->appSecurityInfo = appSecurityInfo::fromMap($map['AppSecurityInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
