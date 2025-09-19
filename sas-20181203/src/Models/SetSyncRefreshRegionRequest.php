<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class SetSyncRefreshRegionRequest extends Model
{
    /**
     * @var int
     */
    public $defaultRegion;

    /**
     * @var string[]
     */
    public $regionIds;

    /**
     * @var string
     */
    public $vendor;
    protected $_name = [
        'defaultRegion' => 'DefaultRegion',
        'regionIds' => 'RegionIds',
        'vendor' => 'Vendor',
    ];

    public function validate()
    {
        if (\is_array($this->regionIds)) {
            Model::validateArray($this->regionIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defaultRegion) {
            $res['DefaultRegion'] = $this->defaultRegion;
        }

        if (null !== $this->regionIds) {
            if (\is_array($this->regionIds)) {
                $res['RegionIds'] = [];
                $n1 = 0;
                foreach ($this->regionIds as $item1) {
                    $res['RegionIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
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
        if (isset($map['DefaultRegion'])) {
            $model->defaultRegion = $map['DefaultRegion'];
        }

        if (isset($map['RegionIds'])) {
            if (!empty($map['RegionIds'])) {
                $model->regionIds = [];
                $n1 = 0;
                foreach ($map['RegionIds'] as $item1) {
                    $model->regionIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
