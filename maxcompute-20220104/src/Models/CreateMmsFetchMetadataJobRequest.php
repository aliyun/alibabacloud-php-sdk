<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Dara\Model;

class CreateMmsFetchMetadataJobRequest extends Model
{
    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string[]
     */
    public $tableNames;
    protected $_name = [
        'dbName' => 'dbName',
        'tableNames' => 'tableNames',
    ];

    public function validate()
    {
        if (\is_array($this->tableNames)) {
            Model::validateArray($this->tableNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbName) {
            $res['dbName'] = $this->dbName;
        }

        if (null !== $this->tableNames) {
            if (\is_array($this->tableNames)) {
                $res['tableNames'] = [];
                $n1 = 0;
                foreach ($this->tableNames as $item1) {
                    $res['tableNames'][$n1] = $item1;
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
            $model->dbName = $map['dbName'];
        }

        if (isset($map['tableNames'])) {
            if (!empty($map['tableNames'])) {
                $model->tableNames = [];
                $n1 = 0;
                foreach ($map['tableNames'] as $item1) {
                    $model->tableNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
