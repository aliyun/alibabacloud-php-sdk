<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceIPArrayListResponseBody\items;

use AlibabaCloud\Tea\Model;

class DBInstanceIPArray extends Model
{
    /**
     * @description The attribute of the IP address whitelist. By default, this parameter is empty.
     *
     * > The IP address whitelists that have the hidden attribute are not displayed in the ApsaraDB RDS console. These IP address whitelists are used to access Alibaba Cloud services, such as Data Transmission Service (DTS).
     * @example hidden
     *
     * @var string
     */
    public $DBInstanceIPArrayAttribute;

    /**
     * @description The name of the IP address whitelist.
     *
     * @example rds_default
     *
     * @var string
     */
    public $DBInstanceIPArrayName;

    /**
     * @description The IP addresses in the IP address whitelist.
     *
     * @example 192.168.1.0/24
     *
     * @var string
     */
    public $securityIPList;

    /**
     * @description The type of the IP address.
     *
     * @example IPv4
     *
     * @var string
     */
    public $securityIPType;
    protected $_name = [
        'DBInstanceIPArrayAttribute' => 'DBInstanceIPArrayAttribute',
        'DBInstanceIPArrayName'      => 'DBInstanceIPArrayName',
        'securityIPList'             => 'SecurityIPList',
        'securityIPType'             => 'SecurityIPType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceIPArrayAttribute) {
            $res['DBInstanceIPArrayAttribute'] = $this->DBInstanceIPArrayAttribute;
        }
        if (null !== $this->DBInstanceIPArrayName) {
            $res['DBInstanceIPArrayName'] = $this->DBInstanceIPArrayName;
        }
        if (null !== $this->securityIPList) {
            $res['SecurityIPList'] = $this->securityIPList;
        }
        if (null !== $this->securityIPType) {
            $res['SecurityIPType'] = $this->securityIPType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBInstanceIPArray
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceIPArrayAttribute'])) {
            $model->DBInstanceIPArrayAttribute = $map['DBInstanceIPArrayAttribute'];
        }
        if (isset($map['DBInstanceIPArrayName'])) {
            $model->DBInstanceIPArrayName = $map['DBInstanceIPArrayName'];
        }
        if (isset($map['SecurityIPList'])) {
            $model->securityIPList = $map['SecurityIPList'];
        }
        if (isset($map['SecurityIPType'])) {
            $model->securityIPType = $map['SecurityIPType'];
        }

        return $model;
    }
}
