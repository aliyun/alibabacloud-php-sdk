<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListBizEntitiesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListBizEntitiesResponseBody\pageResult\bizEntityList;

class pageResult extends Model
{
    /**
     * @var bizEntityList[]
     */
    public $bizEntityList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'bizEntityList' => 'BizEntityList',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->bizEntityList)) {
            Model::validateArray($this->bizEntityList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizEntityList) {
            if (\is_array($this->bizEntityList)) {
                $res['BizEntityList'] = [];
                $n1 = 0;
                foreach ($this->bizEntityList as $item1) {
                    $res['BizEntityList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['BizEntityList'])) {
            if (!empty($map['BizEntityList'])) {
                $model->bizEntityList = [];
                $n1 = 0;
                foreach ($map['BizEntityList'] as $item1) {
                    $model->bizEntityList[$n1++] = bizEntityList::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
