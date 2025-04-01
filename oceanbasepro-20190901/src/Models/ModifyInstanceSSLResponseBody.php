<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyInstanceSSLResponseBody\instanceSSL;

class ModifyInstanceSSLResponseBody extends Model
{
    /**
     * @var instanceSSL
     */
    public $instanceSSL;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceSSL' => 'InstanceSSL',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->instanceSSL) {
            $this->instanceSSL->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceSSL) {
            $res['InstanceSSL'] = null !== $this->instanceSSL ? $this->instanceSSL->toArray($noStream) : $this->instanceSSL;
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
        if (isset($map['InstanceSSL'])) {
            $model->instanceSSL = instanceSSL::fromMap($map['InstanceSSL']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
