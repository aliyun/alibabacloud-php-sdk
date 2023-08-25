<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeClusterAccessWhiteListResponseBody\items;

use AlibabaCloud\Tea\Model;

class IPArray extends Model
{
    /**
     * @description The attribute of the whitelist.
     *
     * > Whitelists with the **hidden** attribute are not displayed in the console. Those whitelists are used to access Data Transmission Service (DTS) and PolarDB.
     * @example hidden
     *
     * @var string
     */
    public $DBClusterIPArrayAttribute;

    /**
     * @description The name of the IP address whitelist.
     *
     * Each cluster supports up to 50 IP address whitelists.
     * @example test
     *
     * @var string
     */
    public $DBClusterIPArrayName;

    /**
     * @description The IP addresses in the IP address whitelist. Up to 500 IP addresses can be returned. Multiple IP addresses are separated by commas (,).
     *
     * @example 127.0.xx.xx
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
