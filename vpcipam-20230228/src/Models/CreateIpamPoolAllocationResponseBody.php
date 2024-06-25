<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228\Models;

use AlibabaCloud\Tea\Model;

class CreateIpamPoolAllocationResponseBody extends Model
{
    /**
     * @example 192.168.1.0/24
     *
     * @var string
     */
    public $cidr;

    /**
     * @example ipam-pool-alloc-112za33e4****
     *
     * @var string
     */
    public $ipamPoolAllocationId;

    /**
     * @example CE9CDAE5-341E-5D0B-AC8A-2BAC707D3EB2
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 192.168.0.0/16
     *
     * @var string
     */
    public $sourceCidr;
    protected $_name = [
        'cidr'                 => 'Cidr',
        'ipamPoolAllocationId' => 'IpamPoolAllocationId',
        'requestId'            => 'RequestId',
        'sourceCidr'           => 'SourceCidr',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cidr) {
            $res['Cidr'] = $this->cidr;
        }
        if (null !== $this->ipamPoolAllocationId) {
            $res['IpamPoolAllocationId'] = $this->ipamPoolAllocationId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sourceCidr) {
            $res['SourceCidr'] = $this->sourceCidr;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateIpamPoolAllocationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cidr'])) {
            $model->cidr = $map['Cidr'];
        }
        if (isset($map['IpamPoolAllocationId'])) {
            $model->ipamPoolAllocationId = $map['IpamPoolAllocationId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SourceCidr'])) {
            $model->sourceCidr = $map['SourceCidr'];
        }

        return $model;
    }
}
