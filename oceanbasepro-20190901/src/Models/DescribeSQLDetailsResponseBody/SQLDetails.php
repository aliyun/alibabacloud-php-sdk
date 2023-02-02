<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSQLDetailsResponseBody;

use AlibabaCloud\Tea\Model;

class SQLDetails extends Model
{
    /**
     * @description The name of the database.
     *
     * @example testdb
     *
     * @var string
     */
    public $dbName;

    /**
     * @description The SQL text.
     *
     * @example SELECT  ****   FROM ****   WHERE **** = ? AND **** = ?   ORDER BY **** ASC
     *
     * @var string
     */
    public $SQLText;

    /**
     * @description The username.
     *
     * @example tester
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'dbName'   => 'DbName',
        'SQLText'  => 'SQLText',
        'userName' => 'UserName',
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
        if (null !== $this->SQLText) {
            $res['SQLText'] = $this->SQLText;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SQLDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['SQLText'])) {
            $model->SQLText = $map['SQLText'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
