<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class dedicatedHostAttribute extends Model
{
    /**
     * @var string
     */
    public $dedicatedHostName;

    /**
     * @var string
     */
    public $dedicatedHostId;
    protected $_name = [
        'dedicatedHostName' => 'DedicatedHostName',
        'dedicatedHostId'   => 'DedicatedHostId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dedicatedHostName) {
            $res['DedicatedHostName'] = $this->dedicatedHostName;
        }
        if (null !== $this->dedicatedHostId) {
            $res['DedicatedHostId'] = $this->dedicatedHostId;
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
        if (isset($map['DedicatedHostName'])) {
            $model->dedicatedHostName = $map['DedicatedHostName'];
        }
        if (isset($map['DedicatedHostId'])) {
            $model->dedicatedHostId = $map['DedicatedHostId'];
        }

        return $model;
    }
}
