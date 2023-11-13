<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebAreaBlockConfigsResponseBody;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebAreaBlockConfigsResponseBody\areaBlockConfigs\regionList;
use AlibabaCloud\Tea\Model;

class areaBlockConfigs extends Model
{
    /**
     * @description The domain name of the website.
     *
     * @example www.aliyun.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The configuration of the blocked locations.
     *
     * @var regionList[]
     */
    public $regionList;
    protected $_name = [
        'domain'     => 'Domain',
        'regionList' => 'RegionList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->regionList) {
            $res['RegionList'] = [];
            if (null !== $this->regionList && \is_array($this->regionList)) {
                $n = 0;
                foreach ($this->regionList as $item) {
                    $res['RegionList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return areaBlockConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['RegionList'])) {
            if (!empty($map['RegionList'])) {
                $model->regionList = [];
                $n                 = 0;
                foreach ($map['RegionList'] as $item) {
                    $model->regionList[$n++] = null !== $item ? regionList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
