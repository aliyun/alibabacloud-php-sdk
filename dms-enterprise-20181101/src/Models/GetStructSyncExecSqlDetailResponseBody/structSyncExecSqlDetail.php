<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetStructSyncExecSqlDetailResponseBody;

use AlibabaCloud\Tea\Model;

class structSyncExecSqlDetail extends Model
{
    /**
     * @description The SQL statements that are executed.
     *
     * @example /\* origin table\[helloz_bak] exist, target table\[helloz_bak] not exist \*\/\n/\* generate \[helloz_bak] create table sql \*\/\ncreate table \`helloz_bak\`(\n\t\`id\` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT \"Primary key\",\n\t\`gmt_create\` datetime NOT NULL COMMENT \"Creation time\",\n\t\`gmt_modified\` datetime NOT NULL COMMENT \"Modification time\",\n\t\`num\` int(11) NOT NULL COMMENT \"Number\",\n\t\`addr\` varchar(50) CHARACTER SET utf8 COLLATE utf8\_general_ci NOT NULL COMMENT \"Address\",\n\tPRIMARY KEY (\`id\`)\n)\nDEFAULT CHARACTER SET=utf8 COLLATE=utf8\_general_ci\nCOMMENT=\"test\"\n\n;
     *
     * @var string
     */
    public $execSql;

    /**
     * @description The total number of SQL statements.
     *
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
