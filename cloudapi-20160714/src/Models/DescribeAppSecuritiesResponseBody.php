<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAppSecuritiesResponseBody\appSecuritys;

class DescribeAppSecuritiesResponseBody extends Model
{
    /**
     * @var appSecuritys
     */
    public $appSecuritys;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'appSecuritys' => 'AppSecuritys',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->appSecuritys) {
            $this->appSecuritys->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appSecuritys) {
            $res['AppSecuritys'] = null !== $this->appSecuritys ? $this->appSecuritys->toArray($noStream) : $this->appSecuritys;
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
        if (isset($map['AppSecuritys'])) {
            $model->appSecuritys = appSecuritys::fromMap($map['AppSecuritys']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
