<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gdb\V20190903\Models\DescribeDBInstanceAccessWhiteListResponseBody\items;

use AlibabaCloud\Tea\Model;

class DBInstanceIPArray extends Model
{
    /**
     * @var string
     */
    public $DBInstanceIPArrayAttribute;

    /**
     * @var string
     */
    public $DBInstanceIPArrayName;

    /**
     * @var string
     */
    public $securityIps;
    protected $_name = [
        'DBInstanceIPArrayAttribute' => 'DBInstanceIPArrayAttribute',
        'DBInstanceIPArrayName'      => 'DBInstanceIPArrayName',
        'securityIps'                => 'SecurityIps',
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
        if (null !== $this->securityIps) {
            $res['SecurityIps'] = $this->securityIps;
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
        if (isset($map['SecurityIps'])) {
            $model->securityIps = $map['SecurityIps'];
        }

        return $model;
    }
}
