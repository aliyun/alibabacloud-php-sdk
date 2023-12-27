<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeDBNodeDirectVipInfoResponseBody\directVipInfo;
use AlibabaCloud\Tea\Model;

class DescribeDBNodeDirectVipInfoResponseBody extends Model
{
    /**
     * @var directVipInfo
     */
    public $directVipInfo;

    /**
     * @example r-bp1zxszhcgatnx****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example ABAF95F6-35C1-4177-AF3A-70969EBD****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'directVipInfo' => 'DirectVipInfo',
        'instanceId'    => 'InstanceId',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->directVipInfo) {
            $res['DirectVipInfo'] = null !== $this->directVipInfo ? $this->directVipInfo->toMap() : null;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBNodeDirectVipInfoResponseBody
     */
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
