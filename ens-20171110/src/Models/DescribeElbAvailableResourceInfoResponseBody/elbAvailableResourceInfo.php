<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeElbAvailableResourceInfoResponseBody;

use AlibabaCloud\Tea\Model;

class elbAvailableResourceInfo extends Model
{
    /**
     * @description The ID of the region.
     *
     * @example SouthEast
     *
     * @var string
     */
    public $area;

    /**
     * @description The number of resources that you can purchase.
     *
     * @example 1
     *
     * @var string
     */
    public $canBuyCount;

    /**
     * @description The name of the node.
     *
     * @example cn-guangdong-10
     *
     * @var string
     */
    public $enName;

    /**
     * @description The ID of the Edge Node Service (ENS) node.
     *
     * @example cn-guangdong-10
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @description The specifications of the ELB instances.
     *
     * @var string[]
     */
    public $loadBalancerSpec;

    /**
     * @description The Chinese name of the node.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The province where the node is deployed.
     *
     * @example Shanghai
     *
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
