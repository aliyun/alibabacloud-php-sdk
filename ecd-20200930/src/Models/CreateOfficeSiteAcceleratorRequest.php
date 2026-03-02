<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateOfficeSiteAcceleratorRequest\accelerateRegion;

class CreateOfficeSiteAcceleratorRequest extends Model
{
    /**
     * @var accelerateRegion[]
     */
    public $accelerateRegion;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $officeSiteId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'accelerateRegion' => 'AccelerateRegion',
        'name' => 'Name',
        'officeSiteId' => 'OfficeSiteId',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
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

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
