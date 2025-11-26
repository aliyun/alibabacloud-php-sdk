<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeLocationInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeLocationInfoResponseBody\cnProvinceList\cities;

class cnProvinceList extends Model
{
    /**
     * @var cities[]
     */
    public $cities;

    /**
     * @var string
     */
    public $provinceName;
    protected $_name = [
        'cities' => 'Cities',
        'provinceName' => 'ProvinceName',
    ];

    public function validate()
    {
        if (\is_array($this->cities)) {
            Model::validateArray($this->cities);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cities) {
            if (\is_array($this->cities)) {
                $res['Cities'] = [];
                $n1 = 0;
                foreach ($this->cities as $item1) {
                    $res['Cities'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->provinceName) {
            $res['ProvinceName'] = $this->provinceName;
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
        if (isset($map['Cities'])) {
            if (!empty($map['Cities'])) {
                $model->cities = [];
                $n1 = 0;
                foreach ($map['Cities'] as $item1) {
                    $model->cities[$n1] = cities::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ProvinceName'])) {
            $model->provinceName = $map['ProvinceName'];
        }

        return $model;
    }
}
