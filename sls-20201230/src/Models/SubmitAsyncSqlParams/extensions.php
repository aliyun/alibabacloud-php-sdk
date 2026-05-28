<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\SubmitAsyncSqlParams;

use AlibabaCloud\Dara\Model;

class extensions extends Model
{
    /**
     * @var int
     */
    public $maxRunTime;

    /**
     * @var bool
     */
    public $powerSql;
    protected $_name = [
        'maxRunTime' => 'maxRunTime',
        'powerSql' => 'powerSql',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxRunTime) {
            $res['maxRunTime'] = $this->maxRunTime;
        }

        if (null !== $this->powerSql) {
            $res['powerSql'] = $this->powerSql;
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
        if (isset($map['maxRunTime'])) {
            $model->maxRunTime = $map['maxRunTime'];
        }

        if (isset($map['powerSql'])) {
            $model->powerSql = $map['powerSql'];
        }

        return $model;
    }
}
