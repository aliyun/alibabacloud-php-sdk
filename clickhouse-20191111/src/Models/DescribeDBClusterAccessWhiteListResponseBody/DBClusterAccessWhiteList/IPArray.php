<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClusterAccessWhiteListResponseBody\DBClusterAccessWhiteList;

use AlibabaCloud\Tea\Model;

class IPArray extends Model
{
    /**
     * @example default
     *
     * @var string
     */
    public $DBClusterIPArrayAttribute;

    /**
     * @example default
     *
     * @var string
     */
    public $DBClusterIPArrayName;

    /**
     * @example 192.168.xx.xx,192.168.xx.xx
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
