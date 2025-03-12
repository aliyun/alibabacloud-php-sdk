<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostTypesResponseBody\dedicatedHostTypes;
use AlibabaCloud\Tea\Model;

class DescribeDedicatedHostTypesResponseBody extends Model
{
    /**
     * @description Details about the dedicated host types.
     *
     * @var dedicatedHostTypes
     */
    public $dedicatedHostTypes;

    /**
     * @description The request ID.
     *
     * @example 5FE5FF06-3A33-4658-8495-6445FC54E327
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dedicatedHostTypes' => 'DedicatedHostTypes',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dedicatedHostTypes) {
            $res['DedicatedHostTypes'] = null !== $this->dedicatedHostTypes ? $this->dedicatedHostTypes->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DedicatedHostTypes'])) {
            $model->dedicatedHostTypes = dedicatedHostTypes::fromMap($map['DedicatedHostTypes']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
