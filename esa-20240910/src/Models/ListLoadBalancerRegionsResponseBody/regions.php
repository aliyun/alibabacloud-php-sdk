<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListLoadBalancerRegionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListLoadBalancerRegionsResponseBody\regions\subRegions;

class regions extends Model
{
    /**
     * @var string
     */
    public $regionCnName;
    /**
     * @var string
     */
    public $regionCode;
    /**
     * @var string
     */
    public $regionEnName;
    /**
     * @var subRegions[]
     */
    public $subRegions;
    protected $_name = [
        'regionCnName' => 'RegionCnName',
        'regionCode'   => 'RegionCode',
        'regionEnName' => 'RegionEnName',
        'subRegions'   => 'SubRegions',
    ];

    public function validate()
    {
        if (\is_array($this->subRegions)) {
            Model::validateArray($this->subRegions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionCnName) {
            $res['RegionCnName'] = $this->regionCnName;
        }

        if (null !== $this->regionCode) {
            $res['RegionCode'] = $this->regionCode;
        }

        if (null !== $this->regionEnName) {
            $res['RegionEnName'] = $this->regionEnName;
        }

        if (null !== $this->subRegions) {
            if (\is_array($this->subRegions)) {
                $res['SubRegions'] = [];
                $n1                = 0;
                foreach ($this->subRegions as $item1) {
                    $res['SubRegions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RegionCnName'])) {
            $model->regionCnName = $map['RegionCnName'];
        }

        if (isset($map['RegionCode'])) {
            $model->regionCode = $map['RegionCode'];
        }

        if (isset($map['RegionEnName'])) {
            $model->regionEnName = $map['RegionEnName'];
        }

        if (isset($map['SubRegions'])) {
            if (!empty($map['SubRegions'])) {
                $model->subRegions = [];
                $n1                = 0;
                foreach ($map['SubRegions'] as $item1) {
                    $model->subRegions[$n1++] = subRegions::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
