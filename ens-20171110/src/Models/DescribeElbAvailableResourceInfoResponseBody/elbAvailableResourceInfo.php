<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeElbAvailableResourceInfoResponseBody;

use AlibabaCloud\Tea\Model;

class elbAvailableResourceInfo extends Model
{
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
        'area'             => 'Area',
        'canBuyCount'      => 'CanBuyCount',
        'enName'           => 'EnName',
        'ensRegionId'      => 'EnsRegionId',
        'loadBalancerSpec' => 'LoadBalancerSpec',
        'name'             => 'Name',
        'province'         => 'Province',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
            $res['LoadBalancerSpec'] = $this->loadBalancerSpec;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return elbAvailableResourceInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
                $model->loadBalancerSpec = $map['LoadBalancerSpec'];
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
