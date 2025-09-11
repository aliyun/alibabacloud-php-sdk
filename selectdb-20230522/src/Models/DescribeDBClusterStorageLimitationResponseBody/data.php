<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeDBClusterStorageLimitationResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeDBClusterStorageLimitationResponseBody\data\classCodeList;

class data extends Model
{
    /**
     * @var classCodeList[]
     */
    public $classCodeList;
    protected $_name = [
        'classCodeList' => 'ClassCodeList',
    ];

    public function validate()
    {
        if (\is_array($this->classCodeList)) {
            Model::validateArray($this->classCodeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->classCodeList) {
            if (\is_array($this->classCodeList)) {
                $res['ClassCodeList'] = [];
                $n1 = 0;
                foreach ($this->classCodeList as $item1) {
                    $res['ClassCodeList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['ClassCodeList'])) {
            if (!empty($map['ClassCodeList'])) {
                $model->classCodeList = [];
                $n1 = 0;
                foreach ($map['ClassCodeList'] as $item1) {
                    $model->classCodeList[$n1] = classCodeList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
