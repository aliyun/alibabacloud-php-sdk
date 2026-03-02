<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyOfficeSiteAcceleratorRequest\accelerateRegion;

class ModifyOfficeSiteAcceleratorRequest extends Model
{
    /**
     * @var accelerateRegion[]
     */
    public $accelerateRegion;

    /**
     * @var string
     */
    public $officeSiteId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'accelerateRegion' => 'AccelerateRegion',
        'officeSiteId' => 'OfficeSiteId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->accelerateRegion)) {
            Model::validateArray($this->accelerateRegion);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accelerateRegion) {
            if (\is_array($this->accelerateRegion)) {
                $res['AccelerateRegion'] = [];
                $n1 = 0;
                foreach ($this->accelerateRegion as $item1) {
                    $res['AccelerateRegion'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['AccelerateRegion'])) {
            if (!empty($map['AccelerateRegion'])) {
                $model->accelerateRegion = [];
                $n1 = 0;
                foreach ($map['AccelerateRegion'] as $item1) {
                    $model->accelerateRegion[$n1] = accelerateRegion::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
