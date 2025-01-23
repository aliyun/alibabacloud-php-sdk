<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Dara\Model;

class OtsDetail extends Model
{
    /**
     * @var string[]
     */
    public $tableNames;
    protected $_name = [
        'tableNames' => 'TableNames',
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
        if (null !== $this->tableNames) {
            if (\is_array($this->tableNames)) {
                $res['TableNames'] = [];
                $n1                = 0;
                foreach ($this->tableNames as $item1) {
                    $res['TableNames'][$n1++] = $item1;
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
        if (isset($map['TableNames'])) {
            if (!empty($map['TableNames'])) {
                $model->tableNames = [];
                $n1                = 0;
                foreach ($map['TableNames'] as $item1) {
                    $model->tableNames[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
