<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerHTTPSListenerAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class aclIds extends Model
{
    /**
     * @var string[]
     */
    public $aclId;
    protected $_name = [
        'aclId' => 'AclId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclId) {
            $res['AclId'] = $this->aclId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return aclIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclId'])) {
            if (!empty($map['AclId'])) {
                $model->aclId = $map['AclId'];
            }
        }

        return $model;
    }
}
