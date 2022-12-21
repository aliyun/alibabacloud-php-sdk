<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetStructSyncExecSqlDetailResponseBody;

use AlibabaCloud\Tea\Model;

class structSyncExecSqlDetail extends Model
{
    /**
     * @var string
     */
    public $execSql;

    /**
     * @example 1
     *
     * @var int
     */
    public $totalSqlCount;
    protected $_name = [
        'execSql'       => 'ExecSql',
        'totalSqlCount' => 'TotalSqlCount',
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
        if (null !== $this->totalSqlCount) {
            $res['TotalSqlCount'] = $this->totalSqlCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return structSyncExecSqlDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExecSql'])) {
            $model->execSql = $map['ExecSql'];
        }
        if (isset($map['TotalSqlCount'])) {
            $model->totalSqlCount = $map['TotalSqlCount'];
        }

        return $model;
    }
}
