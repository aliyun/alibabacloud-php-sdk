<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetStructSyncJobAnalyzeResultResponseBody\structSyncJobAnalyzeResult;

use AlibabaCloud\Tea\Model;

class resultList extends Model
{
    /**
     * @description The SQL script.
     *
     * @example /\\* origin table[helloz_bak] exist, target table[helloz_bak] not exist \\*\/\\n/\\* generate [helloz_bak] create table sql \\*\/\\ncreate table \\`helloz_bak\\`(\\n\\t\\`id\\` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT \\"Primary key\\",\\n\\t\\`gmt_create\\` datetime NOT NULL COMMENT \\"Creation time\\",\\n\\t\\`gmt_modified\\` datetime NOT NULL COMMENT \\"Modification time\\",\\n\\t\\`num\\` int(11) NOT NULL COMMENT \\"Number\\",\\n\\t\\`addr\\` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT \\"Address\\",\\n\\tPRIMARY KEY (\\`id\\`)\\n)\\nDEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci\\nCOMMENT=\\"test\\"\\n\\n;
     *
     * @var string
     */
    public $script;

    /**
     * @description The name of the source table.
     *
     * @example helloz_bak
     *
     * @var string
     */
    public $sourceTableName;

    /**
     * @description The name of the destination table.
     *
     * @example helloz_bak
     *
     * @var string
     */
    public $targetTableName;
    protected $_name = [
        'script'          => 'Script',
        'sourceTableName' => 'SourceTableName',
        'targetTableName' => 'TargetTableName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->script) {
            $res['Script'] = $this->script;
        }
        if (null !== $this->sourceTableName) {
            $res['SourceTableName'] = $this->sourceTableName;
        }
        if (null !== $this->targetTableName) {
            $res['TargetTableName'] = $this->targetTableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Script'])) {
            $model->script = $map['Script'];
        }
        if (isset($map['SourceTableName'])) {
            $model->sourceTableName = $map['SourceTableName'];
        }
        if (isset($map['TargetTableName'])) {
            $model->targetTableName = $map['TargetTableName'];
        }

        return $model;
    }
}
