<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListSecurityClassifyResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListSecurityClassifyResponseBody\classifyListResult\classifyList;

class classifyListResult extends Model
{
    /**
     * @var classifyList[]
     */
    public $classifyList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'classifyList' => 'ClassifyList',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->classifyList)) {
            Model::validateArray($this->classifyList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->classifyList) {
            if (\is_array($this->classifyList)) {
                $res['ClassifyList'] = [];
                $n1 = 0;
                foreach ($this->classifyList as $item1) {
                    $res['ClassifyList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['ClassifyList'])) {
            if (!empty($map['ClassifyList'])) {
                $model->classifyList = [];
                $n1 = 0;
                foreach ($map['ClassifyList'] as $item1) {
                    $model->classifyList[$n1] = classifyList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
