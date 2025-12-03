<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeSignaturesByApiResponseBody\signatures;

class DescribeSignaturesByApiResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var signatures
     */
    public $signatures;
    protected $_name = [
        'requestId' => 'RequestId',
        'signatures' => 'Signatures',
    ];

    public function validate()
    {
        if (null !== $this->signatures) {
            $this->signatures->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->signatures) {
            $res['Signatures'] = null !== $this->signatures ? $this->signatures->toArray($noStream) : $this->signatures;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Signatures'])) {
            $model->signatures = signatures::fromMap($map['Signatures']);
        }

        return $model;
    }
}
