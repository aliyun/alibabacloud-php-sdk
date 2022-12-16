<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListCollectorsResponseBody\result;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListCollectorsResponseBody\result\extendConfigs\machines;
use AlibabaCloud\Tea\Model;

class extendConfigs extends Model
{
    /**
     * @example collectorDeployMachine
     *
     * @var string
     */
    public $configType;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableMonitoring;

    /**
     * @example default_ct-cn-5i2l75bz4776****
     *
     * @var string
     */
    public $groupId;

    /**
     * @example es-cn-n6w1o1x0w001c****-kibana.internal.elasticsearch.aliyuncs.com:5601
     *
     * @var string
     */
    public $host;

    /**
     * @var string[]
     */
    public $hosts;

    /**
     * @example es-cn-nif1z89fz003i****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example elasticsearch
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example https://es-cn-nif1z89fz003i****.kibana.elasticsearch.aliyuncs.com:5601
     *
     * @var string
     */
    public $kibanaHost;

    /**
     * @var machines[]
     */
    public $machines;

    /**
     * @example HTTP
     *
     * @var string
     */
    public $protocol;

    /**
     * @example 8
     *
     * @var string
     */
    public $successPodsCount;

    /**
     * @example 10
     *
     * @var string
     */
    public $totalPodsCount;

    /**
     * @example ECSInstanceId
     *
     * @var string
     */
    public $type;

    /**
     * @example elastic
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'configType'       => 'configType',
        'enableMonitoring' => 'enableMonitoring',
        'groupId'          => 'groupId',
        'host'             => 'host',
        'hosts'            => 'hosts',
        'instanceId'       => 'instanceId',
        'instanceType'     => 'instanceType',
        'kibanaHost'       => 'kibanaHost',
        'machines'         => 'machines',
        'protocol'         => 'protocol',
        'successPodsCount' => 'successPodsCount',
        'totalPodsCount'   => 'totalPodsCount',
        'type'             => 'type',
        'userName'         => 'userName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configType) {
            $res['configType'] = $this->configType;
        }
        if (null !== $this->enableMonitoring) {
            $res['enableMonitoring'] = $this->enableMonitoring;
        }
        if (null !== $this->groupId) {
            $res['groupId'] = $this->groupId;
        }
        if (null !== $this->host) {
            $res['host'] = $this->host;
        }
        if (null !== $this->hosts) {
            $res['hosts'] = $this->hosts;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['instanceType'] = $this->instanceType;
        }
        if (null !== $this->kibanaHost) {
            $res['kibanaHost'] = $this->kibanaHost;
        }
        if (null !== $this->machines) {
            $res['machines'] = [];
            if (null !== $this->machines && \is_array($this->machines)) {
                $n = 0;
                foreach ($this->machines as $item) {
                    $res['machines'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
        }
        if (null !== $this->successPodsCount) {
            $res['successPodsCount'] = $this->successPodsCount;
        }
        if (null !== $this->totalPodsCount) {
            $res['totalPodsCount'] = $this->totalPodsCount;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->userName) {
            $res['userName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return extendConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['configType'])) {
            $model->configType = $map['configType'];
        }
        if (isset($map['enableMonitoring'])) {
            $model->enableMonitoring = $map['enableMonitoring'];
        }
        if (isset($map['groupId'])) {
            $model->groupId = $map['groupId'];
        }
        if (isset($map['host'])) {
            $model->host = $map['host'];
        }
        if (isset($map['hosts'])) {
            if (!empty($map['hosts'])) {
                $model->hosts = $map['hosts'];
            }
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['instanceType'])) {
            $model->instanceType = $map['instanceType'];
        }
        if (isset($map['kibanaHost'])) {
            $model->kibanaHost = $map['kibanaHost'];
        }
        if (isset($map['machines'])) {
            if (!empty($map['machines'])) {
                $model->machines = [];
                $n               = 0;
                foreach ($map['machines'] as $item) {
                    $model->machines[$n++] = null !== $item ? machines::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
        }
        if (isset($map['successPodsCount'])) {
            $model->successPodsCount = $map['successPodsCount'];
        }
        if (isset($map['totalPodsCount'])) {
            $model->totalPodsCount = $map['totalPodsCount'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['userName'])) {
            $model->userName = $map['userName'];
        }

        return $model;
    }
}
