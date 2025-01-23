<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228\Models;

use AlibabaCloud\Dara\Model;

class CreateIpamPoolAllocationResponseBody extends Model
{
    /**
     * @var string
     */
    public $cidr;
    /**
     * @var string
     */
    public $ipamPoolAllocationId;
    /**
     * @var string
     */
    public $requestId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
