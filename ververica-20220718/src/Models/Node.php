<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class Node extends Model
{
    /**
     * @var string
     */
    public $catalogName;
    /**
     * @var string
     */
    public $connector;
    /**
     * @var string
     */
    public $databaseName;
    /**
     * @var string
     */
    public $id;
    /**
     * @var bool
     */
    public $isTemporary;
    /**
     * @var LineageTable[]
     */
    public $tables;
    protected $_name = [
        'catalogName'  => 'catalogName',
        'connector'    => 'connector',
        'databaseName' => 'databaseName',
        'id'           => 'id',
        'isTemporary'  => 'isTemporary',
        'tables'       => 'tables',
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
        if (null !== $this->catalogName) {
            $res['catalogName'] = $this->catalogName;
        }

        if (null !== $this->connector) {
            $res['connector'] = $this->connector;
        }

        if (null !== $this->databaseName) {
            $res['databaseName'] = $this->databaseName;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->isTemporary) {
            $res['isTemporary'] = $this->isTemporary;
        }

        if (null !== $this->tables) {
            if (\is_array($this->tables)) {
                $res['tables'] = [];
                $n1            = 0;
                foreach ($this->tables as $item1) {
                    $res['tables'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['catalogName'])) {
            $model->catalogName = $map['catalogName'];
        }

        if (isset($map['connector'])) {
            $model->connector = $map['connector'];
        }

        if (isset($map['databaseName'])) {
            $model->databaseName = $map['databaseName'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['isTemporary'])) {
            $model->isTemporary = $map['isTemporary'];
        }

        if (isset($map['tables'])) {
            if (!empty($map['tables'])) {
                $model->tables = [];
                $n1            = 0;
                foreach ($map['tables'] as $item1) {
                    $model->tables[$n1++] = LineageTable::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
