<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobsResponseBody\migrationJobs\migrationJob\migrationObject\synchronousObject;

use AlibabaCloud\Dara\Model;

class tableList extends Model
{
    /**
     * @var string[]
     */
    public $table;
    protected $_name = [
        'table' => 'Table',
    ];

    public function validate()
    {
        if (\is_array($this->table)) {
            Model::validateArray($this->table);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->table) {
            if (\is_array($this->table)) {
                $res['Table'] = [];
                $n1           = 0;
                foreach ($this->table as $item1) {
                    $res['Table'][$n1++] = $item1;
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
        if (isset($map['Table'])) {
            if (!empty($map['Table'])) {
                $model->table = [];
                $n1           = 0;
                foreach ($map['Table'] as $item1) {
                    $model->table[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
