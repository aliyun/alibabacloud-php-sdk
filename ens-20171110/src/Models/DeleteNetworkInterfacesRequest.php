<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DeleteNetworkInterfacesRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $networkInterfaceIds;
    protected $_name = [
        'networkInterfaceIds' => 'NetworkInterfaceIds',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkInterfaceIds) {
            $res['NetworkInterfaceIds'] = $this->networkInterfaceIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteNetworkInterfacesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkInterfaceIds'])) {
            if (!empty($map['NetworkInterfaceIds'])) {
                $model->networkInterfaceIds = $map['NetworkInterfaceIds'];
            }
        }

        return $model;
    }
}
