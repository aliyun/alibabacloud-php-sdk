<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetInstanceUpgradeInfoResponseBody\instanceUpgradeInfo;
use AlibabaCloud\Tea\Model;

class GetInstanceUpgradeInfoResponseBody extends Model
{
    /**
     * @var instanceUpgradeInfo
     */
    public $instanceUpgradeInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceUpgradeInfo' => 'InstanceUpgradeInfo',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceUpgradeInfo) {
            $res['InstanceUpgradeInfo'] = null !== $this->instanceUpgradeInfo ? $this->instanceUpgradeInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['InstanceUpgradeInfo'])) {
            $model->instanceUpgradeInfo = instanceUpgradeInfo::fromMap($map['InstanceUpgradeInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
