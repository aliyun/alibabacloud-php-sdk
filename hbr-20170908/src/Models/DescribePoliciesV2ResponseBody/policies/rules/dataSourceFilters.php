<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribePoliciesV2ResponseBody\policies\rules;

use AlibabaCloud\Tea\Model;

class dataSourceFilters extends Model
{
    /**
     * @var string[]
     */
    public $dataSourceIds;

    /**
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'dataSourceIds' => 'DataSourceIds',
        'sourceType'    => 'SourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourceIds) {
            $res['DataSourceIds'] = $this->dataSourceIds;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataSourceFilters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSourceIds'])) {
            if (!empty($map['DataSourceIds'])) {
                $model->dataSourceIds = $map['DataSourceIds'];
            }
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        return $model;
    }
}
