<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class AllocateDedicatedHostsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $dedicatedHostIdSets;
    protected $_name = [
        'requestId'           => 'RequestId',
        'dedicatedHostIdSets' => 'DedicatedHostIdSets',
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
        if (null !== $this->dedicatedHostIdSets) {
            $res['DedicatedHostIdSets'] = $this->dedicatedHostIdSets;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DedicatedHostIdSets'])) {
            if (!empty($map['DedicatedHostIdSets'])) {
                $model->dedicatedHostIdSets = $map['DedicatedHostIdSets'];
            }
        }

        return $model;
    }
}
