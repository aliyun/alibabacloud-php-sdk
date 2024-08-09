<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class PrimaryKey extends Model
{
    /**
     * @var string[]
     */
    public $columns;

    /**
     * @var string
     */
    public $constraintName;
    protected $_name = [
        'columns'        => 'columns',
        'constraintName' => 'constraintName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->columns) {
            $res['columns'] = $this->columns;
        }
        if (null !== $this->constraintName) {
            $res['constraintName'] = $this->constraintName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PrimaryKey
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['columns'])) {
            if (!empty($map['columns'])) {
                $model->columns = $map['columns'];
            }
        }
        if (isset($map['constraintName'])) {
            $model->constraintName = $map['constraintName'];
        }

        return $model;
    }
}
