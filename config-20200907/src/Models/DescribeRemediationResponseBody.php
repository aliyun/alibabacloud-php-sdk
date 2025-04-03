<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\DescribeRemediationResponseBody\remediation;

class DescribeRemediationResponseBody extends Model
{
    /**
     * @var remediation
     */
    public $remediation;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'remediation' => 'Remediation',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->remediation) {
            $this->remediation->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->remediation) {
            $res['Remediation'] = null !== $this->remediation ? $this->remediation->toArray($noStream) : $this->remediation;
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
        if (isset($map['Remediation'])) {
            $model->remediation = remediation::fromMap($map['Remediation']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
