<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListBizUnitsResponseBody;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListBizUnitsResponseBody\data\bizUnitList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var bizUnitList[]
     */
    public $bizUnitList;
    protected $_name = [
        'bizUnitList' => 'BizUnitList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizUnitList) {
            $res['BizUnitList'] = [];
            if (null !== $this->bizUnitList && \is_array($this->bizUnitList)) {
                $n = 0;
                foreach ($this->bizUnitList as $item) {
                    $res['BizUnitList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizUnitList'])) {
            if (!empty($map['BizUnitList'])) {
                $model->bizUnitList = [];
                $n = 0;
                foreach ($map['BizUnitList'] as $item) {
                    $model->bizUnitList[$n++] = null !== $item ? bizUnitList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
