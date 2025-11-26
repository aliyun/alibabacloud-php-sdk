<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeElbAvailableResourceInfoResponseBody;

use AlibabaCloud\Dara\Model;

class elbAvailableResourceInfo extends Model
{
    /**
     * @var string[]
     */
    public $ability;

    /**
     * @var string
     */
    public $area;

    /**
     * @var string
     */
    public $canBuyCount;

    /**
     * @var string
     */
    public $enName;

    /**
     * @var string
     */
    public $ensRegionId;

    /**
     * @var string[]
     */
    public $loadBalancerSpec;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $province;
    protected $_name = [
        'ability' => 'Ability',
        'area' => 'Area',
        'canBuyCount' => 'CanBuyCount',
        'enName' => 'EnName',
        'ensRegionId' => 'EnsRegionId',
        'loadBalancerSpec' => 'LoadBalancerSpec',
        'name' => 'Name',
        'province' => 'Province',
    ];

    public function validate()
    {
        if (\is_array($this->ability)) {
            Model::validateArray($this->ability);
        }
        if (\is_array($this->loadBalancerSpec)) {
            Model::validateArray($this->loadBalancerSpec);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ability) {
            if (\is_array($this->ability)) {
                $res['Ability'] = [];
                $n1 = 0;
                foreach ($this->ability as $item1) {
                    $res['Ability'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->area) {
            $res['Area'] = $this->area;
        }

        if (null !== $this->canBuyCount) {
            $res['CanBuyCount'] = $this->canBuyCount;
        }

        if (null !== $this->enName) {
            $res['EnName'] = $this->enName;
        }

        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }

        if (null !== $this->loadBalancerSpec) {
            if (\is_array($this->loadBalancerSpec)) {
                $res['LoadBalancerSpec'] = [];
                $n1 = 0;
                foreach ($this->loadBalancerSpec as $item1) {
                    $res['LoadBalancerSpec'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->province) {
            $res['Province'] = $this->province;
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
        if (isset($map['Ability'])) {
            if (!empty($map['Ability'])) {
                $model->ability = [];
                $n1 = 0;
                foreach ($map['Ability'] as $item1) {
                    $model->ability[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Area'])) {
            $model->area = $map['Area'];
        }

        if (isset($map['CanBuyCount'])) {
            $model->canBuyCount = $map['CanBuyCount'];
        }

        if (isset($map['EnName'])) {
            $model->enName = $map['EnName'];
        }

        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }

        if (isset($map['LoadBalancerSpec'])) {
            if (!empty($map['LoadBalancerSpec'])) {
                $model->loadBalancerSpec = [];
                $n1 = 0;
                foreach ($map['LoadBalancerSpec'] as $item1) {
                    $model->loadBalancerSpec[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }

        return $model;
    }
}
