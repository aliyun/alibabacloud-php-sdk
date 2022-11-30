<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\AllBaseCityInfoQueryResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\AllBaseCityInfoQueryResponseBody\module\allCityBaseInfoList;
use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @var allCityBaseInfoList[]
     */
    public $allCityBaseInfoList;
    protected $_name = [
        'allCityBaseInfoList' => 'all_city_base_info_list',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allCityBaseInfoList) {
            $res['all_city_base_info_list'] = [];
            if (null !== $this->allCityBaseInfoList && \is_array($this->allCityBaseInfoList)) {
                $n = 0;
                foreach ($this->allCityBaseInfoList as $item) {
                    $res['all_city_base_info_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['all_city_base_info_list'])) {
            if (!empty($map['all_city_base_info_list'])) {
                $model->allCityBaseInfoList = [];
                $n                          = 0;
                foreach ($map['all_city_base_info_list'] as $item) {
                    $model->allCityBaseInfoList[$n++] = null !== $item ? allCityBaseInfoList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
