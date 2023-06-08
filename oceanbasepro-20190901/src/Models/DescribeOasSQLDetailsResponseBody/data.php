<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOasSQLDetailsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example test_db
     *
     * @var string
     */
    public $dbName;

    /**
     * @example select a from b
     *
     * @var string
     */
    public $fulltext;

    /**
     * @example select a from b
     *
     * @var string
     */
    public $statement;

    /**
     * @var string[]
     */
    public $tables;

    /**
     * @example test_user
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'dbName'    => 'DbName',
        'fulltext'  => 'Fulltext',
        'statement' => 'Statement',
        'tables'    => 'Tables',
        'userName'  => 'UserName',
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
        if (null !== $this->fulltext) {
            $res['Fulltext'] = $this->fulltext;
        }
        if (null !== $this->statement) {
            $res['Statement'] = $this->statement;
        }
        if (null !== $this->tables) {
            $res['Tables'] = $this->tables;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['Fulltext'])) {
            $model->fulltext = $map['Fulltext'];
        }
        if (isset($map['Statement'])) {
            $model->statement = $map['Statement'];
        }
        if (isset($map['Tables'])) {
            if (!empty($map['Tables'])) {
                $model->tables = $map['Tables'];
            }
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
