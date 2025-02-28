<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableClassesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableClassesResponseBody\DBInstanceClasses\DBInstanceStorageRange;

class DBInstanceClasses extends Model
{
    /**
     * @var string
     */
    public $DBInstanceClass;
    /**
     * @var DBInstanceStorageRange
     */
    public $DBInstanceStorageRange;
    protected $_name = [
        'DBInstanceClass'        => 'DBInstanceClass',
        'DBInstanceStorageRange' => 'DBInstanceStorageRange',
    ];

    public function validate()
    {
        if (null !== $this->DBInstanceStorageRange) {
            $this->DBInstanceStorageRange->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceClass) {
            $res['DBInstanceClass'] = $this->DBInstanceClass;
        }

        if (null !== $this->DBInstanceStorageRange) {
            $res['DBInstanceStorageRange'] = null !== $this->DBInstanceStorageRange ? $this->DBInstanceStorageRange->toArray($noStream) : $this->DBInstanceStorageRange;
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
        if (isset($map['DBInstanceClass'])) {
            $model->DBInstanceClass = $map['DBInstanceClass'];
        }

        if (isset($map['DBInstanceStorageRange'])) {
            $model->DBInstanceStorageRange = DBInstanceStorageRange::fromMap($map['DBInstanceStorageRange']);
        }

        return $model;
    }
}
