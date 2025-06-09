<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class GetProjectLogsRequest extends Model
{
    /**
     * @var bool
     */
    public $powerSql;

    /**
     * @var string
     */
    public $query;
    protected $_name = [
        'powerSql' => 'powerSql',
        'query' => 'query',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->powerSql) {
            $res['powerSql'] = $this->powerSql;
        }

        if (null !== $this->query) {
            $res['query'] = $this->query;
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
        if (isset($map['powerSql'])) {
            $model->powerSql = $map['powerSql'];
        }

        if (isset($map['query'])) {
            $model->query = $map['query'];
        }

        return $model;
    }
}
