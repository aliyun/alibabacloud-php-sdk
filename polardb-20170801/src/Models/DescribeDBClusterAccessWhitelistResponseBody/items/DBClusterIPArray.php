<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAccessWhitelistResponseBody\items;

use AlibabaCloud\Tea\Model;

class DBClusterIPArray extends Model
{
    /**
     * @description The attributes of the IP whitelist group. Set this parameter to **hidden** to hide the IP whitelist group in the console.
     *
     * > *   The IP whitelist group that has appeared in the console cannot be hidden.
     * > *   This parameter can be specified only when the **WhiteListType** parameter is set to **IP**.
     * @example hidden
     *
     * @var string
     */
    public $DBClusterIPArrayAttribute;

    /**
     * @description The name of the IP whitelist group. The group name must be 2 to 120 characters in length and consists of lowercase letters and digits. It must start with a letter, and end with a letter or a digit.
     *
     *   If the specified whitelist group name does not exist, the whitelist group is created.
     *   If the specified whitelist group name exists, the whitelist group is modified.
     *   If you do not specify this parameter, the default group is modified.
     *
     * > *   You can create a maximum of 50 IP whitelist groups for a cluster.
     * >*   This parameter can be specified only when the **WhiteListType** parameter is set to **IP**.
     * @example default
     *
     * @var string
     */
    public $DBClusterIPArrayName;

    /**
     * @description The IP addresses or Classless Inter-Domain Routing (CIDR) blocks in the IP whitelist group. You can add 1,000 IP addresses or CIDR blocks to all the IP whitelist groups. Separate multiple IP addresses with commas (,). The following two formats are supported:
     *
     *   IP addresses. Example: 10.23.12.24.
     *   CIDR blocks. Example: 10.23.12.24/24. 24 indicates the length of the prefix of the CIDR block. The length is the range of 1 to 32.
     *
     * >  This parameter can be specified only when the **WhiteListType** parameter is set to **IP**.
     * @example 11.***.***.***,11.***.***.***
     *
     * @var string
     */
    public $securityIps;
    protected $_name = [
        'DBClusterIPArrayAttribute' => 'DBClusterIPArrayAttribute',
        'DBClusterIPArrayName'      => 'DBClusterIPArrayName',
        'securityIps'               => 'SecurityIps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterIPArrayAttribute) {
            $res['DBClusterIPArrayAttribute'] = $this->DBClusterIPArrayAttribute;
        }
        if (null !== $this->DBClusterIPArrayName) {
            $res['DBClusterIPArrayName'] = $this->DBClusterIPArrayName;
        }
        if (null !== $this->securityIps) {
            $res['SecurityIps'] = $this->securityIps;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBClusterIPArray
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterIPArrayAttribute'])) {
            $model->DBClusterIPArrayAttribute = $map['DBClusterIPArrayAttribute'];
        }
        if (isset($map['DBClusterIPArrayName'])) {
            $model->DBClusterIPArrayName = $map['DBClusterIPArrayName'];
        }
        if (isset($map['SecurityIps'])) {
            $model->securityIps = $map['SecurityIps'];
        }

        return $model;
    }
}
