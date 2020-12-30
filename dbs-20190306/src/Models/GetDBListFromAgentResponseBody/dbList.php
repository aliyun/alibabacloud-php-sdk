<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models\GetDBListFromAgentResponseBody;

use AlibabaCloud\Tea\Model;

class dbList extends Model
{
    /**
     * @var string[]
     */
    public $dbName;
    protected $_name = [
        'dbName' => 'dbName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbName) {
            $res['dbName'] = $this->dbName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dbList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dbName'])) {
            if (!empty($map['dbName'])) {
                $model->dbName = $map['dbName'];
            }
        }

        return $model;
    }
}
