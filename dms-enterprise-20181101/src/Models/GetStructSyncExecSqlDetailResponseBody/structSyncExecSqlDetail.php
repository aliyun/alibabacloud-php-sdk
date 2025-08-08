<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetStructSyncExecSqlDetailResponseBody;

use AlibabaCloud\Dara\Model;

class structSyncExecSqlDetail extends Model
{
    /**
     * @var string
     */
    public $execSql;

    /**
     * @var int
     */
    public $totalSqlCount;
    protected $_name = [
        'execSql' => 'ExecSql',
        'totalSqlCount' => 'TotalSqlCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
