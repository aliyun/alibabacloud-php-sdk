<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListStandardsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListStandardsResponseBody\pageResult\standardList;

class pageResult extends Model
{
    /**
     * @var standardList[]
     */
    public $standardList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'standardList' => 'StandardList',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->standardList)) {
            Model::validateArray($this->standardList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->standardList) {
            if (\is_array($this->standardList)) {
                $res['StandardList'] = [];
                $n1 = 0;
                foreach ($this->standardList as $item1) {
                    $res['StandardList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['StandardList'])) {
            if (!empty($map['StandardList'])) {
                $model->standardList = [];
                $n1 = 0;
                foreach ($map['StandardList'] as $item1) {
                    $model->standardList[$n1] = standardList::fromMap($item1);
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
