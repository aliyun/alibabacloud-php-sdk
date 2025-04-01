<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeDBNodeDirectVipInfoResponseBody\directVipInfo;

class DescribeDBNodeDirectVipInfoResponseBody extends Model
{
    /**
     * @var directVipInfo
     */
    public $directVipInfo;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'directVipInfo' => 'DirectVipInfo',
        'instanceId' => 'InstanceId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->directVipInfo) {
            $this->directVipInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->directVipInfo) {
            $res['DirectVipInfo'] = null !== $this->directVipInfo ? $this->directVipInfo->toArray($noStream) : $this->directVipInfo;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['DirectVipInfo'])) {
            $model->directVipInfo = directVipInfo::fromMap($map['DirectVipInfo']);
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
