<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeEniQosGroupInfoResponseBody\qosGroupInfo;

use AlibabaCloud\Tea\Model;

class networkInterfaceIds extends Model
{
    /**
     * @var string[]
     */
    public $networkInterfaceId;
    protected $_name = [
        'networkInterfaceId' => 'NetworkInterfaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkInterfaceId) {
            $res['NetworkInterfaceId'] = $this->networkInterfaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkInterfaceIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkInterfaceId'])) {
            if (!empty($map['NetworkInterfaceId'])) {
                $model->networkInterfaceId = $map['NetworkInterfaceId'];
            }
        }

        return $model;
    }
}
