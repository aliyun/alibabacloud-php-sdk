<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeRecommendIndexResponseBody;

use AlibabaCloud\Tea\Model;

class recommendIndex extends Model
{
    /**
     * @description Example 1
     *
     * @example PRIMARY
     *
     * @var string
     */
    public $suggestIndex;

    /**
     * @example testtable
     *
     * @var string
     */
    public $tableList;

    /**
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
