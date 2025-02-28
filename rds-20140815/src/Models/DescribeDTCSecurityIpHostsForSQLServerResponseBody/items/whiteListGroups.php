<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDTCSecurityIpHostsForSQLServerResponseBody\items;

use AlibabaCloud\Dara\Model;

class whiteListGroups extends Model
{
    /**
     * @var string
     */
    public $securityIpHosts;
    /**
     * @var string
     */
    public $whitelistGroupName;
    protected $_name = [
        'securityIpHosts'    => 'SecurityIpHosts',
        'whitelistGroupName' => 'WhitelistGroupName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->securityIpHosts) {
            $res['SecurityIpHosts'] = $this->securityIpHosts;
        }

        if (null !== $this->whitelistGroupName) {
            $res['WhitelistGroupName'] = $this->whitelistGroupName;
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
        if (isset($map['SecurityIpHosts'])) {
            $model->securityIpHosts = $map['SecurityIpHosts'];
        }

        if (isset($map['WhitelistGroupName'])) {
            $model->whitelistGroupName = $map['WhitelistGroupName'];
        }

        return $model;
    }
}
