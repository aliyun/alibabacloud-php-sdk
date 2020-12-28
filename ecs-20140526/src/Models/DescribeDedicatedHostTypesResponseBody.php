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
     * @var dedicatedHostTypes[]
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
            $res['DedicatedHostTypes'] = [];
            if (null !== $this->dedicatedHostTypes && \is_array($this->dedicatedHostTypes)) {
                $n = 0;
                foreach ($this->dedicatedHostTypes as $item) {
                    $res['DedicatedHostTypes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
            if (!empty($map['DedicatedHostTypes'])) {
                $model->dedicatedHostTypes = [];
                $n                         = 0;
                foreach ($map['DedicatedHostTypes'] as $item) {
                    $model->dedicatedHostTypes[$n++] = null !== $item ? dedicatedHostTypes::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
