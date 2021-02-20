<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\AllocateEipAddressResponseBody\eipAddresses;
use AlibabaCloud\Tea\Model;

class AllocateEipAddressResponseBody extends Model
{
    /**
     * @var string
     */
    public $bizStatusCode;

    /**
     * @var eipAddresses
     */
    public $eipAddresses;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'bizStatusCode' => 'BizStatusCode',
        'eipAddresses'  => 'EipAddresses',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizStatusCode) {
            $res['BizStatusCode'] = $this->bizStatusCode;
        }
        if (null !== $this->eipAddresses) {
            $res['EipAddresses'] = null !== $this->eipAddresses ? $this->eipAddresses->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AllocateEipAddressResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizStatusCode'])) {
            $model->bizStatusCode = $map['BizStatusCode'];
        }
        if (isset($map['EipAddresses'])) {
            $model->eipAddresses = eipAddresses::fromMap($map['EipAddresses']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
