<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeRecommendIndexResponseBody;

use AlibabaCloud\Dara\Model;

class recommendIndex extends Model
{
    /**
     * @var string
     */
    public $suggestIndex;

    /**
     * @var string
     */
    public $tableList;

    /**
     * @var string
     */
    public $tenantMode;
    protected $_name = [
        'suggestIndex' => 'SuggestIndex',
        'tableList' => 'TableList',
        'tenantMode' => 'TenantMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
