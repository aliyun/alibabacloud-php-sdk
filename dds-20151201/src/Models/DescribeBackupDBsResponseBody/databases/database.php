<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeBackupDBsResponseBody\databases;

use AlibabaCloud\Tea\Model;

class database extends Model
{
    /**
     * @description The name of the database.
     *
     * @example mongodbtest
     *
     * @var string
     */
    public $DBName;
    protected $_name = [
        'DBName' => 'DBName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return database
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }

        return $model;
    }
}
