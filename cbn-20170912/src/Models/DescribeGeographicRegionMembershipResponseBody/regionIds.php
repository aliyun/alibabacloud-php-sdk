<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeGeographicRegionMembershipResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeGeographicRegionMembershipResponseBody\regionIds\regionId;

class regionIds extends Model
{
    /**
     * @var regionId[]
     */
    public $regionId;
    protected $_name = [
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->regionId)) {
            Model::validateArray($this->regionId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionId) {
            if (\is_array($this->regionId)) {
                $res['RegionId'] = [];
                $n1 = 0;
                foreach ($this->regionId as $item1) {
                    $res['RegionId'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RegionId'])) {
            if (!empty($map['RegionId'])) {
                $model->regionId = [];
                $n1 = 0;
                foreach ($map['RegionId'] as $item1) {
                    $model->regionId[$n1++] = regionId::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
