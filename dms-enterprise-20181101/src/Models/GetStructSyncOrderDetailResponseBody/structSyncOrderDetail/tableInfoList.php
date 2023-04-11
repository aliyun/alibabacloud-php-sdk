<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetStructSyncOrderDetailResponseBody\structSyncOrderDetail;

use AlibabaCloud\Tea\Model;

class tableInfoList extends Model
{
    /**
     * @description The name of the table whose schema you want to synchronize.
     *
     * @example test_tbl
     *
     * @var string
     */
    public $sourceTableName;

    /**
     * @description The name of the table to which you want to synchronize the schema of a table.
     *
     * @example test_tbl
     *
     * @var string
     */
    public $targetTableName;
    protected $_name = [
        'sourceTableName' => 'SourceTableName',
        'targetTableName' => 'TargetTableName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return tableInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceTableName'])) {
            $model->sourceTableName = $map['SourceTableName'];
        }
        if (isset($map['TargetTableName'])) {
            $model->targetTableName = $map['TargetTableName'];
        }

        return $model;
    }
}
