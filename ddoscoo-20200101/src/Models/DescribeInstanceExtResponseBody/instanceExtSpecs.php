<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeInstanceExtResponseBody;

use AlibabaCloud\Tea\Model;

class instanceExtSpecs extends Model
{
    /**
     * @description The function plan. Valid values:
     *
     *   **0**: Standard
     *   **1**: Enhanced
     *
     * @example 0
     *
     * @var int
     */
    public $functionVersion;

    /**
     * @description The instance ID
     *
     * @example ddoscoo-cn-i7m25564****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The clean bandwidth. Unit: Mbit/s.
     *
     * @example 100
     *
     * @var int
     */
    public $normalBandwidth;

    /**
     * @description The type of the instance. Valid value:
     *
     *   **0**: Anti-DDoS Premium instance of the Insurance mitigation plan
     *   **1**: Anti-DDoS Premium instance of the Unlimited mitigation plan
     *   **2**: Anti-DDoS Premium instance of the CMA mitigation plan
     *   **3**: Anti-DDoS Premium instance of the Secure Chinese Mainland Acceleration (Sec-CMA) plan
     *   **9**: Anti-DDoS Pro instance of the Profession mitigation plan
     *
     * @example 0
     *
     * @var int
     */
    public $productPlan;

    /**
     * @description The Internet service provider (ISP) line resource of the Anti-DDoS Pro instance.
     *
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
