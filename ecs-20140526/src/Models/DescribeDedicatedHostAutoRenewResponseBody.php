<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostAutoRenewResponseBody\dedicatedHostRenewAttributes;
use AlibabaCloud\Tea\Model;

class DescribeDedicatedHostAutoRenewResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var dedicatedHostRenewAttributes
     */
    public $dedicatedHostRenewAttributes;
    protected $_name = [
        'requestId'                    => 'RequestId',
        'dedicatedHostRenewAttributes' => 'DedicatedHostRenewAttributes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->dedicatedHostRenewAttributes) {
            $res['DedicatedHostRenewAttributes'] = null !== $this->dedicatedHostRenewAttributes ? $this->dedicatedHostRenewAttributes->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDedicatedHostAutoRenewResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DedicatedHostRenewAttributes'])) {
            $model->dedicatedHostRenewAttributes = dedicatedHostRenewAttributes::fromMap($map['DedicatedHostRenewAttributes']);
        }

        return $model;
    }
}
