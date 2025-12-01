<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models\GetDBListFromAgentResponseBody;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->dbName)) {
            Model::validateArray($this->dbName);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbName) {
            if (\is_array($this->dbName)) {
                $res['dbName'] = [];
                $n1 = 0;
                foreach ($this->dbName as $item1) {
                    $res['dbName'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['dbName'])) {
            if (!empty($map['dbName'])) {
                $model->dbName = [];
                $n1 = 0;
                foreach ($map['dbName'] as $item1) {
                    $model->dbName[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
