<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\AllocateDedicatedHostsResponseBody\dedicatedHostIdSets;
use AlibabaCloud\Tea\Model;

class AllocateDedicatedHostsResponseBody extends Model
{
    /**
     * @description The IDs of the dedicated hosts.
     *
     * @var dedicatedHostIdSets
     */
    public $dedicatedHostIdSets;

    /**
     * @description The ID of the request.
     *
     * @example E2A664A6-2933-4C64-88AE-5033D003****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dedicatedHostIdSets' => 'DedicatedHostIdSets',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dedicatedHostIdSets) {
            $res['DedicatedHostIdSets'] = null !== $this->dedicatedHostIdSets ? $this->dedicatedHostIdSets->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AllocateDedicatedHostsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DedicatedHostIdSets'])) {
            $model->dedicatedHostIdSets = dedicatedHostIdSets::fromMap($map['DedicatedHostIdSets']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
