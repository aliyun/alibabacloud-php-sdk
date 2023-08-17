<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClusterAccessWhiteListResponseBody\items;

use AlibabaCloud\Tea\Model;

class IPArray extends Model
{
    /**
     * @description The attribute of the whitelist group. It is empty by default.
     *
     * >  The groups with hidden attribute are not displayed in the console. The groups with hidden attribute are used to access DTS and PolarDB-X.
     * @example hidden
     *
     * @var string
     */
    public $DBClusterIPArrayAttribute;

    /**
     * @description The name of the IP address whitelist.
     *
     *   The name of the IP address whitelist group must be 2 to 32 characters in length and can contain lowercase letters, digits, and underscores (\_). The name must start with a lowercase letter and end with a digit or lowercase letter.
     *   You can create up to 50 whitelists for a cluster.
     *
     * @example test
     *
     * @var string
     */
    public $DBClusterIPArrayName;

    /**
     * @description The IP addresses in an IP address whitelist. A maximum of 1,000 IP addresses can be returned. These addresses are separated with commas (,).
     *
     * @example 127.0.0.1
     *
     * @var string
     */
    public $securityIPList;
    protected $_name = [
        'DBClusterIPArrayAttribute' => 'DBClusterIPArrayAttribute',
        'DBClusterIPArrayName'      => 'DBClusterIPArrayName',
        'securityIPList'            => 'SecurityIPList',
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
        if (null !== $this->securityIPList) {
            $res['SecurityIPList'] = $this->securityIPList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IPArray
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
        if (isset($map['SecurityIPList'])) {
            $model->securityIPList = $map['SecurityIPList'];
        }

        return $model;
    }
}
