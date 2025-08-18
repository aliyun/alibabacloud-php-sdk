<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListBizUnitsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListBizUnitsResponseBody\data\bizUnitList;

class data extends Model
{
    /**
     * @var bizUnitList[]
     */
    public $bizUnitList;
    protected $_name = [
        'bizUnitList' => 'BizUnitList',
    ];

    public function validate()
    {
        if (\is_array($this->bizUnitList)) {
            Model::validateArray($this->bizUnitList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizUnitList) {
            if (\is_array($this->bizUnitList)) {
                $res['BizUnitList'] = [];
                $n1 = 0;
                foreach ($this->bizUnitList as $item1) {
                    $res['BizUnitList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['BizUnitList'])) {
            if (!empty($map['BizUnitList'])) {
                $model->bizUnitList = [];
                $n1 = 0;
                foreach ($map['BizUnitList'] as $item1) {
                    $model->bizUnitList[$n1] = bizUnitList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
