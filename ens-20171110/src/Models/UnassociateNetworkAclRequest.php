<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\UnassociateNetworkAclRequest\resource;
use AlibabaCloud\Tea\Model;

class UnassociateNetworkAclRequest extends Model
{
    /**
     * @description The ID of the network ACL that you want to disassociate from a resource.
     *
     * This parameter is required.
     *
     * @example nacl-a2do9e413e0sp****
     *
     * @var string
     */
    public $networkAclId;

    /**
     * @description Resources that you want to disassociate. Valid values of **N**: 0 to 29. A maximum of 30 resources can be unbound.
     *
     * This parameter is required.
     *
     * @var resource[]
     */
    public $resource;
    protected $_name = [
        'networkAclId' => 'NetworkAclId',
        'resource' => 'Resource',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkAclId) {
            $res['NetworkAclId'] = $this->networkAclId;
        }
        if (null !== $this->resource) {
            $res['Resource'] = [];
            if (null !== $this->resource && \is_array($this->resource)) {
                $n = 0;
                foreach ($this->resource as $item) {
                    $res['Resource'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UnassociateNetworkAclRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkAclId'])) {
            $model->networkAclId = $map['NetworkAclId'];
        }
        if (isset($map['Resource'])) {
            if (!empty($map['Resource'])) {
                $model->resource = [];
                $n = 0;
                foreach ($map['Resource'] as $item) {
                    $model->resource[$n++] = null !== $item ? resource::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
