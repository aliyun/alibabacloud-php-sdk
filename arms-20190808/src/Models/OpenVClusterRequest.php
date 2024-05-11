<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class OpenVClusterRequest extends Model
{
    /**
     * @description The type of the cluster. For cloud services, set this parameter to `cloud-product-prometheus`.
     *
     * This parameter is required.
     * @example cloud-product-prometheus
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description The length of the cluster ID. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $length;

    /**
     * @description The name of the cloud service. This parameter is required if you set ClusterType to `cloud-product-prometheus`. Valid values: influxdb, mongodb, and DLA. You cannot specify multiple service names.
     *
     * @example influxdb
     *
     * @var string
     */
    public $product;

    /**
     * @description Specifies whether to create or query a virtual cluster. This parameter provides backward compatibility.
     *
     * @example false
     *
     * @var bool
     */
    public $recreateSwitch;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clusterType'    => 'ClusterType',
        'length'         => 'Length',
        'product'        => 'Product',
        'recreateSwitch' => 'RecreateSwitch',
        'regionId'       => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->length) {
            $res['Length'] = $this->length;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->recreateSwitch) {
            $res['RecreateSwitch'] = $this->recreateSwitch;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OpenVClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['Length'])) {
            $model->length = $map['Length'];
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['RecreateSwitch'])) {
            $model->recreateSwitch = $map['RecreateSwitch'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
