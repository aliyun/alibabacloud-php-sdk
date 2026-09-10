<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models;

use AlibabaCloud\Dara\Model;

class SingleSqlDryRunRequest extends Model
{
    /**
     * @var string
     */
    public $datasourceName;

    /**
     * @var string
     */
    public $sql;
    protected $_name = [
        'datasourceName' => 'datasourceName',
        'sql' => 'sql',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->datasourceName) {
            $res['datasourceName'] = $this->datasourceName;
        }

        if (null !== $this->sql) {
            $res['sql'] = $this->sql;
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
        if (isset($map['datasourceName'])) {
            $model->datasourceName = $map['datasourceName'];
        }

        if (isset($map['sql'])) {
            $model->sql = $map['sql'];
        }

        return $model;
    }
}
