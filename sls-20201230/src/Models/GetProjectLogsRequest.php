<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class GetProjectLogsRequest extends Model
{
    /**
     * @description Specifies whether to enable the Dedicated SQL feature. For more information, see [Enable Dedicated SQL](~~223777~~). Valid values:
     *
     *   true
     *   false (default): enables the Standard SQL feature.
     *
     * You can use the powerSql or **query** parameter to configure Dedicated SQL.
     * @example false
     *
     * @var bool
     */
    public $powerSql;

    /**
     * @description The standard SQL statement. In this example, the SQL statement queries the number of page views (PVs) from 2022-03-01 10:41:40 to 2022-03-01 10:56:40 in a Logstore whose name is nginx-moni.
     *
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
