<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\AllBaseCityInfoQueryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\AllBaseCityInfoQueryResponseBody\module\allCityBaseInfoList;

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
        if (\is_array($this->allCityBaseInfoList)) {
            Model::validateArray($this->allCityBaseInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allCityBaseInfoList) {
            if (\is_array($this->allCityBaseInfoList)) {
                $res['all_city_base_info_list'] = [];
                $n1 = 0;
                foreach ($this->allCityBaseInfoList as $item1) {
                    $res['all_city_base_info_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['all_city_base_info_list'])) {
            if (!empty($map['all_city_base_info_list'])) {
                $model->allCityBaseInfoList = [];
                $n1 = 0;
                foreach ($map['all_city_base_info_list'] as $item1) {
                    $model->allCityBaseInfoList[$n1] = allCityBaseInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
