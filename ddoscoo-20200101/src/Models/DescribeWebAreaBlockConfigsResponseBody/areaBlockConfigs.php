<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebAreaBlockConfigsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebAreaBlockConfigsResponseBody\areaBlockConfigs\regionList;

class areaBlockConfigs extends Model
{
    /**
     * @var string
     */
    public $domain;

    /**
     * @var regionList[]
     */
    public $regionList;
    protected $_name = [
        'domain' => 'Domain',
        'regionList' => 'RegionList',
    ];

    public function validate()
    {
        if (\is_array($this->regionList)) {
            Model::validateArray($this->regionList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->regionList) {
            if (\is_array($this->regionList)) {
                $res['RegionList'] = [];
                $n1 = 0;
                foreach ($this->regionList as $item1) {
                    $res['RegionList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['RegionList'])) {
            if (!empty($map['RegionList'])) {
                $model->regionList = [];
                $n1 = 0;
                foreach ($map['RegionList'] as $item1) {
                    $model->regionList[$n1++] = regionList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
