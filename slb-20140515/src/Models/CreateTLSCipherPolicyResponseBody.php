<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\Tea\Model;

class CreateTLSCipherPolicyResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $TLSCipherPolicyId;
    protected $_name = [
        'requestId'         => 'RequestId',
        'TLSCipherPolicyId' => 'TLSCipherPolicyId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->TLSCipherPolicyId) {
            $res['TLSCipherPolicyId'] = $this->TLSCipherPolicyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTLSCipherPolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TLSCipherPolicyId'])) {
            $model->TLSCipherPolicyId = $map['TLSCipherPolicyId'];
        }

        return $model;
    }
}
