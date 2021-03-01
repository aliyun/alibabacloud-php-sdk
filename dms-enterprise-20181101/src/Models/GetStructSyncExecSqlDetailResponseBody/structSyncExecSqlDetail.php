<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetStructSyncExecSqlDetailResponseBody;

use AlibabaCloud\Tea\Model;

class structSyncExecSqlDetail extends Model
{
    /**
     * @var int
     */
    public $totalSqlCount;

    /**
     * @var string
     */
    public $execSql;
    protected $_name = [
        'totalSqlCount' => 'TotalSqlCount',
        'execSql'       => 'ExecSql',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalSqlCount) {
            $res['TotalSqlCount'] = $this->totalSqlCount;
        }
        if (null !== $this->execSql) {
            $res['ExecSql'] = $this->execSql;
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
        if (isset($map['TotalSqlCount'])) {
            $model->totalSqlCount = $map['TotalSqlCount'];
        }
        if (isset($map['ExecSql'])) {
            $model->execSql = $map['ExecSql'];
        }

        return $model;
    }
}
