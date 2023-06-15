<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableClassesResponseBody;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableClassesResponseBody\DBInstanceClasses\DBInstanceStorageRange;
use AlibabaCloud\Tea\Model;

class DBInstanceClasses extends Model
{
    /**
     * @description The instance type of the instance.
     *
     * @example rds.mysql.c1.large
     *
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @description The storage capacity range that is supported for the instance.
     *
     * @var DBInstanceStorageRange
     */
    public $DBInstanceStorageRange;
    protected $_name = [
        'DBInstanceClass'        => 'DBInstanceClass',
        'DBInstanceStorageRange' => 'DBInstanceStorageRange',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceClass) {
            $res['DBInstanceClass'] = $this->DBInstanceClass;
        }
        if (null !== $this->DBInstanceStorageRange) {
            $res['DBInstanceStorageRange'] = null !== $this->DBInstanceStorageRange ? $this->DBInstanceStorageRange->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBInstanceClasses
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceClass'])) {
            $model->DBInstanceClass = $map['DBInstanceClass'];
        }
        if (isset($map['DBInstanceStorageRange'])) {
            $model->DBInstanceStorageRange = DBInstanceStorageRange::fromMap($map['DBInstanceStorageRange']);
        }

        return $model;
    }
}
