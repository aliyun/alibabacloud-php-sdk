<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeRdsAnalysisResourceQuotasResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeRdsAnalysisResourceQuotasResponseBody\DBNodeCategoryList\DBNodeCategory;

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
        if (\is_array($this->DBNodeCategory)) {
            Model::validateArray($this->DBNodeCategory);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBNodeCategory) {
            if (\is_array($this->DBNodeCategory)) {
                $res['DBNodeCategory'] = [];
                $n1 = 0;
                foreach ($this->DBNodeCategory as $item1) {
                    $res['DBNodeCategory'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['DBNodeCategory'])) {
            if (!empty($map['DBNodeCategory'])) {
                $model->DBNodeCategory = [];
                $n1 = 0;
                foreach ($map['DBNodeCategory'] as $item1) {
                    $model->DBNodeCategory[$n1++] = DBNodeCategory::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
