<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\AllocateEipAddressResponse\eipAddresses;
use AlibabaCloud\Tea\Model;

class AllocateEipAddressResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $bizStatusCode;

    /**
     * @var eipAddresses
     */
    public $eipAddresses;
    protected $_name = [
        'requestId'     => 'RequestId',
        'bizStatusCode' => 'BizStatusCode',
        'eipAddresses'  => 'EipAddresses',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('bizStatusCode', $this->bizStatusCode, true);
        Model::validateRequired('eipAddresses', $this->eipAddresses, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->bizStatusCode) {
            $res['BizStatusCode'] = $this->bizStatusCode;
        }
        if (null !== $this->eipAddresses) {
            $res['EipAddresses'] = null !== $this->eipAddresses ? $this->eipAddresses->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AllocateEipAddressResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['BizStatusCode'])) {
            $model->bizStatusCode = $map['BizStatusCode'];
        }
        if (isset($map['EipAddresses'])) {
            $model->eipAddresses = eipAddresses::fromMap($map['EipAddresses']);
        }

        return $model;
    }
}
