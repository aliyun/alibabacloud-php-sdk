<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDedicatedHostsResponseBody\dedicatedHosts;
use AlibabaCloud\Tea\Model;

class DescribeDedicatedHostsResponseBody extends Model
{
    /**
     * @description The ID of the dedicated cluster.
     *
     * @example dhg-7a9xxxxxxxx
     *
     * @var string
     */
    public $dedicatedHostGroupId;

    /**
     * @description An array that consists of hosts returned.
     *
     * @var dedicatedHosts
     */
    public $dedicatedHosts;

    /**
     * @description The ID of the request.
     *
     * @example C860658E-68A6-46C1-AF6E-3AE7C4D3CACF
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dedicatedHostGroupId' => 'DedicatedHostGroupId',
        'dedicatedHosts'       => 'DedicatedHosts',
        'requestId'            => 'RequestId',
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
        if (null !== $this->dedicatedHosts) {
            $res['DedicatedHosts'] = null !== $this->dedicatedHosts ? $this->dedicatedHosts->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDedicatedHostsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DedicatedHostGroupId'])) {
            $model->dedicatedHostGroupId = $map['DedicatedHostGroupId'];
        }
        if (isset($map['DedicatedHosts'])) {
            $model->dedicatedHosts = dedicatedHosts::fromMap($map['DedicatedHosts']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
