<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smartag\V20180313\Models\AttachCcnInstanceToCenRequest\regionBindingList;

class AttachCcnInstanceToCenRequest extends Model
{
    /**
     * @var string
     */
    public $ccnId;

    /**
     * @var string
     */
    public $cenId;

    /**
     * @var string
     */
    public $cidrAllocationMode;

    /**
     * @var regionBindingList[]
     */
    public $regionBindingList;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $subnet;
    protected $_name = [
        'ccnId' => 'CcnId',
        'cenId' => 'CenId',
        'cidrAllocationMode' => 'CidrAllocationMode',
        'regionBindingList' => 'RegionBindingList',
        'regionId' => 'RegionId',
        'subnet' => 'Subnet',
    ];

    public function validate()
    {
        if (\is_array($this->regionBindingList)) {
            Model::validateArray($this->regionBindingList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ccnId) {
            $res['CcnId'] = $this->ccnId;
        }

        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }

        if (null !== $this->cidrAllocationMode) {
            $res['CidrAllocationMode'] = $this->cidrAllocationMode;
        }

        if (null !== $this->regionBindingList) {
            if (\is_array($this->regionBindingList)) {
                $res['RegionBindingList'] = [];
                $n1 = 0;
                foreach ($this->regionBindingList as $item1) {
                    $res['RegionBindingList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->subnet) {
            $res['Subnet'] = $this->subnet;
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
        if (isset($map['CcnId'])) {
            $model->ccnId = $map['CcnId'];
        }

        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }

        if (isset($map['CidrAllocationMode'])) {
            $model->cidrAllocationMode = $map['CidrAllocationMode'];
        }

        if (isset($map['RegionBindingList'])) {
            if (!empty($map['RegionBindingList'])) {
                $model->regionBindingList = [];
                $n1 = 0;
                foreach ($map['RegionBindingList'] as $item1) {
                    $model->regionBindingList[$n1] = regionBindingList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Subnet'])) {
            $model->subnet = $map['Subnet'];
        }

        return $model;
    }
}
