<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostTypesResponseBody\dedicatedHostTypes;
use AlibabaCloud\Tea\Model;

class DescribeDedicatedHostTypesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var dedicatedHostTypes
     */
    public $dedicatedHostTypes;
    protected $_name = [
        'requestId'          => 'RequestId',
        'dedicatedHostTypes' => 'DedicatedHostTypes',
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
        if (null !== $this->dedicatedHostTypes) {
            $res['DedicatedHostTypes'] = null !== $this->dedicatedHostTypes ? $this->dedicatedHostTypes->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDedicatedHostTypesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DedicatedHostTypes'])) {
            $model->dedicatedHostTypes = dedicatedHostTypes::fromMap($map['DedicatedHostTypes']);
        }

        return $model;
    }
}
