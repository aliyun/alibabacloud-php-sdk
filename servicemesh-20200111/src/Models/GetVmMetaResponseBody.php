<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetVmMetaResponseBody\vmMetaInfo;
use AlibabaCloud\Tea\Model;

class GetVmMetaResponseBody extends Model
{
    /**
     * @var vmMetaInfo
     */
    public $vmMetaInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'vmMetaInfo' => 'VmMetaInfo',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vmMetaInfo) {
            $res['VmMetaInfo'] = null !== $this->vmMetaInfo ? $this->vmMetaInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetVmMetaResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VmMetaInfo'])) {
            $model->vmMetaInfo = vmMetaInfo::fromMap($map['VmMetaInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
