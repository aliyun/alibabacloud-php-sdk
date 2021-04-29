<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceNetInfoResponseBody\DBInstanceNetInfos\DBInstanceNetInfo\securityIPGroups;

use AlibabaCloud\Tea\Model;

class securityIPGroup extends Model
{
    /**
     * @var string
     */
    public $securityIPs;

    /**
     * @var string
     */
    public $securityIPGroupName;
    protected $_name = [
        'securityIPs'         => 'SecurityIPs',
        'securityIPGroupName' => 'SecurityIPGroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityIPs) {
            $res['SecurityIPs'] = $this->securityIPs;
        }
        if (null !== $this->securityIPGroupName) {
            $res['SecurityIPGroupName'] = $this->securityIPGroupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityIPGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityIPs'])) {
            $model->securityIPs = $map['SecurityIPs'];
        }
        if (isset($map['SecurityIPGroupName'])) {
            $model->securityIPGroupName = $map['SecurityIPGroupName'];
        }

        return $model;
    }
}
