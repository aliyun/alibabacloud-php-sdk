<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolsResponseBody\nodepools;

use AlibabaCloud\Tea\Model;

class interconnectConfig extends Model
{
    /**
     * @description 边缘增强型节点池的网络带宽，单位M
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description 边缘增强型节点池绑定的云连接网实例ID(CCNID)
     *
     * @var string
     */
    public $ccnId;

    /**
     * @description 边缘增强型节点池绑定的云连接网实例所属的区域
     *
     * @var string
     */
    public $ccnRegionId;

    /**
     * @description 边缘增强型节点池绑定的云企业网实例ID(CENID)
     *
     * @var string
     */
    public $cenId;

    /**
     * @description 边缘增强型节点池的购买时长，单位月
     *
     * @var string
     */
    public $improvedPeriod;
    protected $_name = [
        'bandwidth'      => 'bandwidth',
        'ccnId'          => 'ccn_id',
        'ccnRegionId'    => 'ccn_region_id',
        'cenId'          => 'cen_id',
        'improvedPeriod' => 'improved_period',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->ccnId) {
            $res['ccn_id'] = $this->ccnId;
        }
        if (null !== $this->ccnRegionId) {
            $res['ccn_region_id'] = $this->ccnRegionId;
        }
        if (null !== $this->cenId) {
            $res['cen_id'] = $this->cenId;
        }
        if (null !== $this->improvedPeriod) {
            $res['improved_period'] = $this->improvedPeriod;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return interconnectConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['bandwidth'])) {
            $model->bandwidth = $map['bandwidth'];
        }
        if (isset($map['ccn_id'])) {
            $model->ccnId = $map['ccn_id'];
        }
        if (isset($map['ccn_region_id'])) {
            $model->ccnRegionId = $map['ccn_region_id'];
        }
        if (isset($map['cen_id'])) {
            $model->cenId = $map['cen_id'];
        }
        if (isset($map['improved_period'])) {
            $model->improvedPeriod = $map['improved_period'];
        }

        return $model;
    }
}
