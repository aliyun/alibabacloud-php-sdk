<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class dedicatedHostAttribute extends Model
{
    /**
     * @description The ID of the dedicated host.
     *
     * @example dh-2ze7qrzz6lvbfhr0****
     *
     * @var string
     */
    public $dedicatedHostId;

    /**
     * @description The name of the dedicated host.
     *
     * @example ecs-autoui-create-ddh-temp
     *
     * @var string
     */
    public $dedicatedHostName;
    protected $_name = [
        'dedicatedHostId'   => 'DedicatedHostId',
        'dedicatedHostName' => 'DedicatedHostName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (isset($map['DedicatedHostId'])) {
            $model->dedicatedHostId = $map['DedicatedHostId'];
        }
        if (isset($map['DedicatedHostName'])) {
            $model->dedicatedHostName = $map['DedicatedHostName'];
        }

        return $model;
    }
}
