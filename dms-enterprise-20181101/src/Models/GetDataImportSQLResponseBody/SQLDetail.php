<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataImportSQLResponseBody;

use AlibabaCloud\Tea\Model;

class SQLDetail extends Model
{
    /**
     * @description The SQL script.
     *
     * @example insert into t1 values (1);
     *
     * @var string
     */
    public $execSql;
    protected $_name = [
        'execSql' => 'ExecSql',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->execSql) {
            $res['ExecSql'] = $this->execSql;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SQLDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExecSql'])) {
            $model->execSql = $map['ExecSql'];
        }

        return $model;
    }
}
