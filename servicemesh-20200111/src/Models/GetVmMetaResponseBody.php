<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetVmMetaResponseBody\vmMetaInfo;

class GetVmMetaResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var vmMetaInfo
     */
    public $vmMetaInfo;
    protected $_name = [
        'requestId' => 'RequestId',
        'vmMetaInfo' => 'VmMetaInfo',
    ];

    public function validate()
    {
        if (null !== $this->vmMetaInfo) {
            $this->vmMetaInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->vmMetaInfo) {
            $res['VmMetaInfo'] = null !== $this->vmMetaInfo ? $this->vmMetaInfo->toArray($noStream) : $this->vmMetaInfo;
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

        if (isset($map['VmMetaInfo'])) {
            $model->vmMetaInfo = vmMetaInfo::fromMap($map['VmMetaInfo']);
        }

        return $model;
    }
}
