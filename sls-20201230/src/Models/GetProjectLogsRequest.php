<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class GetProjectLogsRequest extends Model
{
    /**
     * @description 是否使用SQL独享版。更多信息，请参见开启SQL独享版。
     *
     * 除通过powerSql参数配置SQL独享版外，您还可以使用query参数。
     * @var bool
     */
    public $powerSql;

    /**
     * @description 标准SQL语句。例如日志库名称为nginx-moni，查询时间区间在2022-03-01 10:41:40到2022-03-01 10:56:40之间的访问数量。
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
