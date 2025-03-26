<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceNetInfoForChannelResponseBody\DBInstanceNetInfos\DBInstanceNetInfo\securityIPGroups;

use AlibabaCloud\Dara\Model;

class securityIPGroup extends Model
{
    /**
     * @var string
     */
    public $securityIPGroupName;

    /**
     * @var string
     */
    public $securityIPs;
    protected $_name = [
        'securityIPGroupName' => 'SecurityIPGroupName',
        'securityIPs' => 'SecurityIPs',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->securityIPGroupName) {
            $res['SecurityIPGroupName'] = $this->securityIPGroupName;
        }

        if (null !== $this->securityIPs) {
            $res['SecurityIPs'] = $this->securityIPs;
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
        if (isset($map['SecurityIPGroupName'])) {
            $model->securityIPGroupName = $map['SecurityIPGroupName'];
        }

        if (isset($map['SecurityIPs'])) {
            $model->securityIPs = $map['SecurityIPs'];
        }

        return $model;
    }
}
