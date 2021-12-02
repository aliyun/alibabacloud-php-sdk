<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipAddressesResponseBody\eipAddresses\eipAddress;

use AlibabaCloud\Tea\Model;

class securityProtectionTypes extends Model
{
    /**
     * @var string[]
     */
    public $securityProtectionType;
    protected $_name = [
        'securityProtectionType' => 'SecurityProtectionType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityProtectionType) {
            $res['SecurityProtectionType'] = $this->securityProtectionType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityProtectionTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityProtectionType'])) {
            if (!empty($map['SecurityProtectionType'])) {
                $model->securityProtectionType = $map['SecurityProtectionType'];
            }
        }

        return $model;
    }
}
