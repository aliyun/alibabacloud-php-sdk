<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetInstanceUpgradeInfoResponseBody\instanceUpgradeInfo;
use AlibabaCloud\Tea\Model;

class GetInstanceUpgradeInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var instanceUpgradeInfo
     */
    public $instanceUpgradeInfo;
    protected $_name = [
        'requestId'           => 'RequestId',
        'instanceUpgradeInfo' => 'InstanceUpgradeInfo',
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
        if (null !== $this->instanceUpgradeInfo) {
            $res['InstanceUpgradeInfo'] = null !== $this->instanceUpgradeInfo ? $this->instanceUpgradeInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInstanceUpgradeInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['InstanceUpgradeInfo'])) {
            $model->instanceUpgradeInfo = instanceUpgradeInfo::fromMap($map['InstanceUpgradeInfo']);
        }

        return $model;
    }
}
