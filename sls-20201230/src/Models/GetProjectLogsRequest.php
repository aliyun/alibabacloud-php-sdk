<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class GetProjectLogsRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $powerSql;

    /**
     * @example SELECT COUNT(*) as pv FROM nginx-moni where __time__ &gt; 1646102500 and __time__ &lt; 1646103400
     *
     * @var string
     */
    public $query;
    protected $_name = [
        'powerSql' => 'powerSql',
        'query'    => 'query',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return GetProjectLogsRequest
     */
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
