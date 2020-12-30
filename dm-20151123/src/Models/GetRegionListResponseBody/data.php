<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\GetRegionListResponseBody;

use AlibabaCloud\SDK\Dm\V20151123\Models\GetRegionListResponseBody\data\regionList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var regionList[]
     */
    public $regionList;
    protected $_name = [
        'regionList' => 'regionList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionList) {
            $res['regionList'] = [];
            if (null !== $this->regionList && \is_array($this->regionList)) {
                $n = 0;
                foreach ($this->regionList as $item) {
                    $res['regionList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['regionList'])) {
            if (!empty($map['regionList'])) {
                $model->regionList = [];
                $n                 = 0;
                foreach ($map['regionList'] as $item) {
                    $model->regionList[$n++] = null !== $item ? regionList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
