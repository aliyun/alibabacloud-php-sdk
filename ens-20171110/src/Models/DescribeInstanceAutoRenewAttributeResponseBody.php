<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstanceAutoRenewAttributeResponseBody\instanceRenewAttributes;
use AlibabaCloud\Tea\Model;

class DescribeInstanceAutoRenewAttributeResponseBody extends Model
{
    /**
     * @var int
     */
    public $code;

    /**
     * @var instanceRenewAttributes
     */
    public $instanceRenewAttributes;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'                    => 'Code',
        'instanceRenewAttributes' => 'InstanceRenewAttributes',
        'requestId'               => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->instanceRenewAttributes) {
            $res['InstanceRenewAttributes'] = null !== $this->instanceRenewAttributes ? $this->instanceRenewAttributes->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceAutoRenewAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['InstanceRenewAttributes'])) {
            $model->instanceRenewAttributes = instanceRenewAttributes::fromMap($map['InstanceRenewAttributes']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
