<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\DescribeRemediationResponseBody\remediation;
use AlibabaCloud\Tea\Model;

class DescribeRemediationResponseBody extends Model
{
    /**
     * @description The details of the remediation configuration.
     *
     * @var remediation
     */
    public $remediation;

    /**
     * @description The request ID.
     *
     * @example 79BE07A7-46A5-5D3C-B378-0ACDA979****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'remediation' => 'Remediation',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->remediation) {
            $res['Remediation'] = null !== $this->remediation ? $this->remediation->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRemediationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Remediation'])) {
            $model->remediation = remediation::fromMap($map['Remediation']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
