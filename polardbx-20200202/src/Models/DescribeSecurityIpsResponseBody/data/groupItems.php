<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeSecurityIpsResponseBody\data;

use AlibabaCloud\Tea\Model;

class groupItems extends Model
{
    /**
     * @example defaultGroup
     *
     * @var string
     */
    public $groupName;

    /**
     * @example 127.0.0.1,172.168.0.0
     *
     * @var string
     */
    public $securityIPList;
    protected $_name = [
        'groupName'      => 'GroupName',
        'securityIPList' => 'SecurityIPList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->securityIPList) {
            $res['SecurityIPList'] = $this->securityIPList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return groupItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['SecurityIPList'])) {
            $model->securityIPList = $map['SecurityIPList'];
        }

        return $model;
    }
}
