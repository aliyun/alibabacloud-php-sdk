<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeInstanceExtResponseBody;

use AlibabaCloud\Tea\Model;

class instanceExtSpecs extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $functionVersion;

    /**
     * @example ddoscoo-cn-i7m25564****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 100
     *
     * @var int
     */
    public $normalBandwidth;

    /**
     * @example 0
     *
     * @var int
     */
    public $productPlan;

    /**
     * @example coop-line-001
     *
     * @var string
     */
    public $servicePartner;
    protected $_name = [
        'functionVersion' => 'FunctionVersion',
        'instanceId'      => 'InstanceId',
        'normalBandwidth' => 'NormalBandwidth',
        'productPlan'     => 'ProductPlan',
        'servicePartner'  => 'ServicePartner',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->functionVersion) {
            $res['FunctionVersion'] = $this->functionVersion;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->normalBandwidth) {
            $res['NormalBandwidth'] = $this->normalBandwidth;
        }
        if (null !== $this->productPlan) {
            $res['ProductPlan'] = $this->productPlan;
        }
        if (null !== $this->servicePartner) {
            $res['ServicePartner'] = $this->servicePartner;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceExtSpecs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FunctionVersion'])) {
            $model->functionVersion = $map['FunctionVersion'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NormalBandwidth'])) {
            $model->normalBandwidth = $map['NormalBandwidth'];
        }
        if (isset($map['ProductPlan'])) {
            $model->productPlan = $map['ProductPlan'];
        }
        if (isset($map['ServicePartner'])) {
            $model->servicePartner = $map['ServicePartner'];
        }

        return $model;
    }
}
