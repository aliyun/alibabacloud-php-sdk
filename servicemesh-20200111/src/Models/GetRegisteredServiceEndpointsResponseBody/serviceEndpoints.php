<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetRegisteredServiceEndpointsResponseBody;

use AlibabaCloud\Tea\Model;

class serviceEndpoints extends Model
{
    /**
     * @description The ID of the cluster on the data plane.
     *
     * @example 192.168.25.153
     *
     * @var string
     */
    public $address;

    /**
     * @description The details of the endpoints of the registered service.
     *
     * @example c80f45444b3da447da60a911390c2****
     *
     * @var string
     */
    public $clusterId;
    protected $_name = [
        'address'   => 'Address',
        'clusterId' => 'ClusterId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceEndpoints
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        return $model;
    }
}
