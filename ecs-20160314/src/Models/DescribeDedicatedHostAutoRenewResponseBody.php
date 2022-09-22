<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDedicatedHostAutoRenewResponseBody\instanceRenewAttributes;
use AlibabaCloud\Tea\Model;

class DescribeDedicatedHostAutoRenewResponseBody extends Model
{
    /**
     * @var instanceRenewAttributes
     */
    public $instanceRenewAttributes;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceRenewAttributes' => 'InstanceRenewAttributes',
        'requestId'               => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceRenewAttributes) {
            $res['InstanceRenewAttributes'] = null !== $this->instanceRenewAttributes ? $this->instanceRenewAttributes->toMap() : null;
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
        if (isset($map['InstanceRenewAttributes'])) {
            $model->instanceRenewAttributes = instanceRenewAttributes::fromMap($map['InstanceRenewAttributes']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
