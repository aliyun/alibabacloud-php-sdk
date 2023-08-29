<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class DbStorageRank extends Model
{
    /**
     * @var string
     */
    public $dbName;

    /**
     * @var int
     */
    public $quantity;
    protected $_name = [
        'dbName'   => 'DbName',
        'quantity' => 'Quantity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DbStorageRank
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }

        return $model;
    }
}
