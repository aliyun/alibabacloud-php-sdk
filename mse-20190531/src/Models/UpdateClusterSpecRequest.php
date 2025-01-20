<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Dara\Model;

class UpdateClusterSpecRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;
    /**
     * @var bool
     */
    public $autoPay;
    /**
     * @var string
     */
    public $clusterId;
    /**
     * @var string
     */
    public $clusterSpecification;
    /**
     * @var int
     */
    public $instanceCount;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $mseVersion;
    /**
     * @var int
     */
    public $pubNetworkFlow;
    protected $_name = [
        'acceptLanguage'       => 'AcceptLanguage',
        'autoPay'              => 'AutoPay',
        'clusterId'            => 'ClusterId',
        'clusterSpecification' => 'ClusterSpecification',
        'instanceCount'        => 'InstanceCount',
        'instanceId'           => 'InstanceId',
        'mseVersion'           => 'MseVersion',
        'pubNetworkFlow'       => 'PubNetworkFlow',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
