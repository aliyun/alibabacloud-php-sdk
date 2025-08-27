<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeBackupDBsResponseBody\databases;

use AlibabaCloud\Dara\Model;

class database extends Model
{
    /**
     * @var string
     */
    public $DBName;
    protected $_name = [
        'DBName' => 'DBName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
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
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }

        return $model;
    }
}
