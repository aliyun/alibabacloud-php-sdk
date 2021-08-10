<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceIPArrayListResponseBody\items;

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
    public $securityIPList;
    protected $_name = [
        'DBInstanceIPArrayAttribute' => 'DBInstanceIPArrayAttribute',
        'DBInstanceIPArrayName'      => 'DBInstanceIPArrayName',
        'securityIPList'             => 'SecurityIPList',
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

        return $model;
    }
}
