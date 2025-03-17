<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class UpdateClusterSpecRequest extends Model
{
    /**
     * @description The language of the response. Valid values:
     *
     *   zh: Chinese
     *   en: English
     *
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var bool
     */
    public $autoPay;

    /**
     * @description The ID of the cluster.
     *
     * @example mse-09k1q11****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The destination engine specifications.
     *
     * @example MSE_SC_2_4_200_c
     *
     * @var string
     */
    public $clusterSpecification;

    /**
     * @description The number of destination nodes.
     *
     * @example 3
     *
     * @var int
     */
    public $instanceCount;

    /**
     * @description The ID of the instance.
     *
     * This parameter is required.
     *
     * @example mse-cn-st21ri2****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The MSE version.
     *
     * @example mse_pro
     *
     * @var string
     */
    public $mseVersion;

    /**
     * @var int
     */
    public $pubNetworkFlow;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'autoPay' => 'AutoPay',
        'clusterId' => 'ClusterId',
        'clusterSpecification' => 'ClusterSpecification',
        'instanceCount' => 'InstanceCount',
        'instanceId' => 'InstanceId',
        'mseVersion' => 'MseVersion',
        'pubNetworkFlow' => 'PubNetworkFlow',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterSpecification) {
            $res['ClusterSpecification'] = $this->clusterSpecification;
        }
        if (null !== $this->instanceCount) {
            $res['InstanceCount'] = $this->instanceCount;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->mseVersion) {
            $res['MseVersion'] = $this->mseVersion;
        }
        if (null !== $this->pubNetworkFlow) {
            $res['PubNetworkFlow'] = $this->pubNetworkFlow;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateClusterSpecRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterSpecification'])) {
            $model->clusterSpecification = $map['ClusterSpecification'];
        }
        if (isset($map['InstanceCount'])) {
            $model->instanceCount = $map['InstanceCount'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MseVersion'])) {
            $model->mseVersion = $map['MseVersion'];
        }
        if (isset($map['PubNetworkFlow'])) {
            $model->pubNetworkFlow = $map['PubNetworkFlow'];
        }

        return $model;
    }
}
