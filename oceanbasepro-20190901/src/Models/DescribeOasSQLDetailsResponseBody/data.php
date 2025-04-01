<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOasSQLDetailsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $fulltext;

    /**
     * @var string
     */
    public $statement;

    /**
     * @var string[]
     */
    public $tables;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'dbName' => 'DbName',
        'fulltext' => 'Fulltext',
        'statement' => 'Statement',
        'tables' => 'Tables',
        'userName' => 'UserName',
    ];

    public function validate()
    {
        if (\is_array($this->tables)) {
            Model::validateArray($this->tables);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->tables)) {
                $res['Tables'] = [];
                $n1 = 0;
                foreach ($this->tables as $item1) {
                    $res['Tables'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
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
                $model->tables = [];
                $n1 = 0;
                foreach ($map['Tables'] as $item1) {
                    $model->tables[$n1++] = $item1;
                }
            }
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
