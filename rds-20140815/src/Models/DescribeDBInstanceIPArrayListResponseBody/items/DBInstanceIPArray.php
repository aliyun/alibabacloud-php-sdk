<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceIPArrayListResponseBody\items;

use AlibabaCloud\Tea\Model;

class DBInstanceIPArray extends Model
{
    /**
     * @var string
     */
    public $DBInstanceIPArrayName;

    /**
     * @var string
     */
    public $securityIPType;

    /**
     * @var string
     */
    public $securityIPList;

    /**
     * @var string
     */
    public $DBInstanceIPArrayAttribute;
    protected $_name = [
        'DBInstanceIPArrayName'      => 'DBInstanceIPArrayName',
        'securityIPType'             => 'SecurityIPType',
        'securityIPList'             => 'SecurityIPList',
        'DBInstanceIPArrayAttribute' => 'DBInstanceIPArrayAttribute',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceIPArrayName) {
            $res['DBInstanceIPArrayName'] = $this->DBInstanceIPArrayName;
        }
        if (null !== $this->securityIPType) {
            $res['SecurityIPType'] = $this->securityIPType;
        }
        if (null !== $this->securityIPList) {
            $res['SecurityIPList'] = $this->securityIPList;
        }
        if (null !== $this->DBInstanceIPArrayAttribute) {
            $res['DBInstanceIPArrayAttribute'] = $this->DBInstanceIPArrayAttribute;
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
        if (isset($map['DBInstanceIPArrayName'])) {
            $model->DBInstanceIPArrayName = $map['DBInstanceIPArrayName'];
        }
        if (isset($map['SecurityIPType'])) {
            $model->securityIPType = $map['SecurityIPType'];
        }
        if (isset($map['SecurityIPList'])) {
            $model->securityIPList = $map['SecurityIPList'];
        }
        if (isset($map['DBInstanceIPArrayAttribute'])) {
            $model->DBInstanceIPArrayAttribute = $map['DBInstanceIPArrayAttribute'];
        }

        return $model;
    }
}
