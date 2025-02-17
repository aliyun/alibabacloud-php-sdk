<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;

class AllocateEipAddressResponseBody extends Model
{
    /**
     * @var string
     */
    public $allocationId;
    /**
     * @var string
     */
    public $eipAddress;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'allocationId' => 'AllocationId',
        'eipAddress'   => 'EipAddress',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allocationId) {
            $res['AllocationId'] = $this->allocationId;
        }

        if (null !== $this->eipAddress) {
            $res['EipAddress'] = $this->eipAddress;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AllocationId'])) {
            $model->allocationId = $map['AllocationId'];
        }

        if (isset($map['EipAddress'])) {
            $model->eipAddress = $map['EipAddress'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
