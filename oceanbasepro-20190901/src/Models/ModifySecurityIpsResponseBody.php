<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifySecurityIpsResponseBody\securityIpGroup;
use AlibabaCloud\Tea\Model;

class ModifySecurityIpsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var securityIpGroup
     */
    public $securityIpGroup;
    protected $_name = [
        'requestId'       => 'RequestId',
        'securityIpGroup' => 'SecurityIpGroup',
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
        if (null !== $this->securityIpGroup) {
            $res['SecurityIpGroup'] = null !== $this->securityIpGroup ? $this->securityIpGroup->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifySecurityIpsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecurityIpGroup'])) {
            $model->securityIpGroup = securityIpGroup::fromMap($map['SecurityIpGroup']);
        }

        return $model;
    }
}
