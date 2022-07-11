<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostAutoRenewResponseBody\dedicatedHostRenewAttributes;
use AlibabaCloud\Tea\Model;

class DescribeDedicatedHostAutoRenewResponseBody extends Model
{
    /**
     * @var dedicatedHostRenewAttributes
     */
    public $dedicatedHostRenewAttributes;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dedicatedHostRenewAttributes' => 'DedicatedHostRenewAttributes',
        'requestId'                    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dedicatedHostRenewAttributes) {
            $res['DedicatedHostRenewAttributes'] = null !== $this->dedicatedHostRenewAttributes ? $this->dedicatedHostRenewAttributes->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DedicatedHostRenewAttributes'])) {
            $model->dedicatedHostRenewAttributes = dedicatedHostRenewAttributes::fromMap($map['DedicatedHostRenewAttributes']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
