<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeRecommendIndexResponseBody;

use AlibabaCloud\Tea\Model;

class recommendIndex extends Model
{
    /**
     * @description The index recommended for the SQL statement after calculation by the diagnostic system.
     * The system recommends only one index for an SQL statement. You can call the DescribeIndexes operation to view the indexes of a table.
     * @example PRIMARY
     *
     * @var string
     */
    public $suggestIndex;

    /**
     * @description The tables.
     * The data tables involved in the SQL statement corresponding to the SQL ID are returned. For a single-table query, the data table accessed is returned. For a join query, all data tables accessed by the SQL statement are returned and separated with vertical bars (|), for example, "Table1|Table2".
     * @example testtable
     *
     * @var string
     */
    public $tableList;

    /**
     * @description The tenant mode.   Valid values:
     * MySQL
     * @example mysql
     *
     * @var string
     */
    public $tenantMode;
    protected $_name = [
        'suggestIndex' => 'SuggestIndex',
        'tableList'    => 'TableList',
        'tenantMode'   => 'TenantMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->suggestIndex) {
            $res['SuggestIndex'] = $this->suggestIndex;
        }
        if (null !== $this->tableList) {
            $res['TableList'] = $this->tableList;
        }
        if (null !== $this->tenantMode) {
            $res['TenantMode'] = $this->tenantMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recommendIndex
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SuggestIndex'])) {
            $model->suggestIndex = $map['SuggestIndex'];
        }
        if (isset($map['TableList'])) {
            $model->tableList = $map['TableList'];
        }
        if (isset($map['TenantMode'])) {
            $model->tenantMode = $map['TenantMode'];
        }

        return $model;
    }
}
