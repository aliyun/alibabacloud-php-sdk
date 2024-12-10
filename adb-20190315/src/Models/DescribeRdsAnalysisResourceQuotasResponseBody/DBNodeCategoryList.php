<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeRdsAnalysisResourceQuotasResponseBody;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeRdsAnalysisResourceQuotasResponseBody\DBNodeCategoryList\DBNodeCategory;
use AlibabaCloud\Tea\Model;

class DBNodeCategoryList extends Model
{
    /**
     * @var DBNodeCategory[]
     */
    public $DBNodeCategory;
    protected $_name = [
        'DBNodeCategory' => 'DBNodeCategory',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBNodeCategory) {
            $res['DBNodeCategory'] = [];
            if (null !== $this->DBNodeCategory && \is_array($this->DBNodeCategory)) {
                $n = 0;
                foreach ($this->DBNodeCategory as $item) {
                    $res['DBNodeCategory'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBNodeCategoryList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBNodeCategory'])) {
            if (!empty($map['DBNodeCategory'])) {
                $model->DBNodeCategory = [];
                $n                     = 0;
                foreach ($map['DBNodeCategory'] as $item) {
                    $model->DBNodeCategory[$n++] = null !== $item ? DBNodeCategory::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
