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
     * @var dedicatedHostRenewAttributes[]
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
            $res['DedicatedHostRenewAttributes'] = [];
            if (null !== $this->dedicatedHostRenewAttributes && \is_array($this->dedicatedHostRenewAttributes)) {
                $n = 0;
                foreach ($this->dedicatedHostRenewAttributes as $item) {
                    $res['DedicatedHostRenewAttributes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
            if (!empty($map['DedicatedHostRenewAttributes'])) {
                $model->dedicatedHostRenewAttributes = [];
                $n                                   = 0;
                foreach ($map['DedicatedHostRenewAttributes'] as $item) {
                    $model->dedicatedHostRenewAttributes[$n++] = null !== $item ? dedicatedHostRenewAttributes::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
