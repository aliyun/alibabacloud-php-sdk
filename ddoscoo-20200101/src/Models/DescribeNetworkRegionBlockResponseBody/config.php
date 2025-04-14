<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeNetworkRegionBlockResponseBody;

use AlibabaCloud\Dara\Model;

class config extends Model
{
    /**
     * @var int[]
     */
    public $countries;

    /**
     * @var int[]
     */
    public $provinces;

    /**
     * @var string
     */
    public $regionBlockSwitch;
    protected $_name = [
        'countries' => 'Countries',
        'provinces' => 'Provinces',
        'regionBlockSwitch' => 'RegionBlockSwitch',
    ];

    public function validate()
    {
        if (\is_array($this->countries)) {
            Model::validateArray($this->countries);
        }
        if (\is_array($this->provinces)) {
            Model::validateArray($this->provinces);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->countries) {
            if (\is_array($this->countries)) {
                $res['Countries'] = [];
                $n1 = 0;
                foreach ($this->countries as $item1) {
                    $res['Countries'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->provinces) {
            if (\is_array($this->provinces)) {
                $res['Provinces'] = [];
                $n1 = 0;
                foreach ($this->provinces as $item1) {
                    $res['Provinces'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->regionBlockSwitch) {
            $res['RegionBlockSwitch'] = $this->regionBlockSwitch;
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
        if (isset($map['Countries'])) {
            if (!empty($map['Countries'])) {
                $model->countries = [];
                $n1 = 0;
                foreach ($map['Countries'] as $item1) {
                    $model->countries[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Provinces'])) {
            if (!empty($map['Provinces'])) {
                $model->provinces = [];
                $n1 = 0;
                foreach ($map['Provinces'] as $item1) {
                    $model->provinces[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RegionBlockSwitch'])) {
            $model->regionBlockSwitch = $map['RegionBlockSwitch'];
        }

        return $model;
    }
}
