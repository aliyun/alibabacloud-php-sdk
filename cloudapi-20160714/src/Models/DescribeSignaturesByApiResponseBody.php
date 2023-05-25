<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeSignaturesByApiResponseBody\signatures;
use AlibabaCloud\Tea\Model;

class DescribeSignaturesByApiResponseBody extends Model
{
    /**
     * @description The time when the key was bound.
     *
     * @example CEF72CEB-54B6-4AE8-B225-F876FF7BZ004
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the backend signature key.
     *
     * @var signatures
     */
    public $signatures;
    protected $_name = [
        'requestId'  => 'RequestId',
        'signatures' => 'Signatures',
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
        if (null !== $this->signatures) {
            $res['Signatures'] = null !== $this->signatures ? $this->signatures->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSignaturesByApiResponseBody
     */
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
