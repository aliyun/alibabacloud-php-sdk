<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models;

use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedResourceAdvisorResponseBody\resourceAdvisors;
use AlibabaCloud\Tea\Model;

class DescribeDedicatedResourceAdvisorResponseBody extends Model
{
    /**
     * @var string
     */
    public $dedicatedHostGroupId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var resourceAdvisors
     */
    public $resourceAdvisors;
    protected $_name = [
        'dedicatedHostGroupId' => 'DedicatedHostGroupId',
        'requestId'            => 'RequestId',
        'resourceAdvisors'     => 'ResourceAdvisors',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dedicatedHostGroupId) {
            $res['DedicatedHostGroupId'] = $this->dedicatedHostGroupId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceAdvisors) {
            $res['ResourceAdvisors'] = null !== $this->resourceAdvisors ? $this->resourceAdvisors->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDedicatedResourceAdvisorResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DedicatedHostGroupId'])) {
            $model->dedicatedHostGroupId = $map['DedicatedHostGroupId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceAdvisors'])) {
            $model->resourceAdvisors = resourceAdvisors::fromMap($map['ResourceAdvisors']);
        }

        return $model;
    }
}
