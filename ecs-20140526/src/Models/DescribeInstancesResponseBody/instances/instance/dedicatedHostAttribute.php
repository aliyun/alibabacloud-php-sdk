<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\instance;

use AlibabaCloud\Tea\Model;

class dedicatedHostAttribute extends Model
{
    /**
     * @description The ID of the dedicated host cluster.
     *
     * @example dc-bp67acfmxazb4h****
     *
     * @var string
     */
    public $dedicatedHostClusterId;

    /**
     * @description The ID of the dedicated host.
     *
     * @example dh-bp67acfmxazb4p****
     *
     * @var string
     */
    public $dedicatedHostId;

    /**
     * @description The name of the dedicated host.
     *
     * @example testDedicatedHostName
     *
     * @var string
     */
    public $dedicatedHostName;
    protected $_name = [
        'dedicatedHostClusterId' => 'DedicatedHostClusterId',
        'dedicatedHostId'        => 'DedicatedHostId',
        'dedicatedHostName'      => 'DedicatedHostName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dedicatedHostClusterId) {
            $res['DedicatedHostClusterId'] = $this->dedicatedHostClusterId;
        }
        if (null !== $this->dedicatedHostId) {
            $res['DedicatedHostId'] = $this->dedicatedHostId;
        }
        if (null !== $this->dedicatedHostName) {
            $res['DedicatedHostName'] = $this->dedicatedHostName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dedicatedHostAttribute
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DedicatedHostClusterId'])) {
            $model->dedicatedHostClusterId = $map['DedicatedHostClusterId'];
        }
        if (isset($map['DedicatedHostId'])) {
            $model->dedicatedHostId = $map['DedicatedHostId'];
        }
        if (isset($map['DedicatedHostName'])) {
            $model->dedicatedHostName = $map['DedicatedHostName'];
        }

        return $model;
    }
}
