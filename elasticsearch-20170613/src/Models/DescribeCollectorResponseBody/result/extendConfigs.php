<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeCollectorResponseBody\result;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeCollectorResponseBody\result\extendConfigs\machines;
use AlibabaCloud\Tea\Model;

class extendConfigs extends Model
{
    /**
     * @var string
     */
    public $successPodsCount;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $totalPodsCount;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $kibanaHost;

    /**
     * @var bool
     */
    public $enableMonitoring;

    /**
     * @var string
     */
    public $configType;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $host;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var machines[]
     */
    public $machines;

    /**
     * @var string[]
     */
    public $hosts;
    protected $_name = [
        'successPodsCount' => 'successPodsCount',
        'protocol'         => 'protocol',
        'userName'         => 'userName',
        'totalPodsCount'   => 'totalPodsCount',
        'type'             => 'type',
        'kibanaHost'       => 'kibanaHost',
        'enableMonitoring' => 'enableMonitoring',
        'configType'       => 'configType',
        'instanceType'     => 'instanceType',
        'groupId'          => 'groupId',
        'host'             => 'host',
        'instanceId'       => 'instanceId',
        'machines'         => 'machines',
        'hosts'            => 'hosts',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->successPodsCount) {
            $res['successPodsCount'] = $this->successPodsCount;
        }
        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
        }
        if (null !== $this->userName) {
            $res['userName'] = $this->userName;
        }
        if (null !== $this->totalPodsCount) {
            $res['totalPodsCount'] = $this->totalPodsCount;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->kibanaHost) {
            $res['kibanaHost'] = $this->kibanaHost;
        }
        if (null !== $this->enableMonitoring) {
            $res['enableMonitoring'] = $this->enableMonitoring;
        }
        if (null !== $this->configType) {
            $res['configType'] = $this->configType;
        }
        if (null !== $this->instanceType) {
            $res['instanceType'] = $this->instanceType;
        }
        if (null !== $this->groupId) {
            $res['groupId'] = $this->groupId;
        }
        if (null !== $this->host) {
            $res['host'] = $this->host;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
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
        if (null !== $this->hosts) {
            $res['hosts'] = $this->hosts;
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
        if (isset($map['successPodsCount'])) {
            $model->successPodsCount = $map['successPodsCount'];
        }
        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
        }
        if (isset($map['userName'])) {
            $model->userName = $map['userName'];
        }
        if (isset($map['totalPodsCount'])) {
            $model->totalPodsCount = $map['totalPodsCount'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['kibanaHost'])) {
            $model->kibanaHost = $map['kibanaHost'];
        }
        if (isset($map['enableMonitoring'])) {
            $model->enableMonitoring = $map['enableMonitoring'];
        }
        if (isset($map['configType'])) {
            $model->configType = $map['configType'];
        }
        if (isset($map['instanceType'])) {
            $model->instanceType = $map['instanceType'];
        }
        if (isset($map['groupId'])) {
            $model->groupId = $map['groupId'];
        }
        if (isset($map['host'])) {
            $model->host = $map['host'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
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
        if (isset($map['hosts'])) {
            if (!empty($map['hosts'])) {
                $model->hosts = $map['hosts'];
            }
        }

        return $model;
    }
}
