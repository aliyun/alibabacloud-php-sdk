<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DetachNetworkInterfaceRequest extends Model
{
    /**
     * @description The ID of the ENI.
     *
     * This parameter is required.
     *
     * @example eni-58z57orgmt6d1****
     *
     * @var string
     */
    public $networkInterfaceId;
    protected $_name = [
        'networkInterfaceId' => 'NetworkInterfaceId',
    ];

    public function validate() {}

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
     * @return DetachNetworkInterfaceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkInterfaceId'])) {
            $model->networkInterfaceId = $map['NetworkInterfaceId'];
        }

        return $model;
    }
}
