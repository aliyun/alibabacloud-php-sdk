<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstanceAutoRenewAttributeResponseBody\instanceRenewAttributes;

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
        'code' => 'Code',
        'instanceRenewAttributes' => 'InstanceRenewAttributes',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->instanceRenewAttributes) {
            $this->instanceRenewAttributes->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->instanceRenewAttributes) {
            $res['InstanceRenewAttributes'] = null !== $this->instanceRenewAttributes ? $this->instanceRenewAttributes->toArray($noStream) : $this->instanceRenewAttributes;
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
