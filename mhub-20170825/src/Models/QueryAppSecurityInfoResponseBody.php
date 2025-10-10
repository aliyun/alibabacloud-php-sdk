<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mhub\V20170825\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mhub\V20170825\Models\QueryAppSecurityInfoResponseBody\appSecurityInfo;

class QueryAppSecurityInfoResponseBody extends Model
{
    /**
     * @var appSecurityInfo
     */
    public $appSecurityInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'appSecurityInfo' => 'AppSecurityInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->appSecurityInfo) {
            $this->appSecurityInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appSecurityInfo) {
            $res['AppSecurityInfo'] = null !== $this->appSecurityInfo ? $this->appSecurityInfo->toArray($noStream) : $this->appSecurityInfo;
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
        if (isset($map['AppSecurityInfo'])) {
            $model->appSecurityInfo = appSecurityInfo::fromMap($map['AppSecurityInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
