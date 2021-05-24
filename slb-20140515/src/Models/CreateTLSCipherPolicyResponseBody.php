<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\Tea\Model;

class CreateTLSCipherPolicyResponseBody extends Model
{
    /**
     * @var string
     */
    public $TLSCipherPolicyId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'TLSCipherPolicyId' => 'TLSCipherPolicyId',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->TLSCipherPolicyId) {
            $res['TLSCipherPolicyId'] = $this->TLSCipherPolicyId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['TLSCipherPolicyId'])) {
            $model->TLSCipherPolicyId = $map['TLSCipherPolicyId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
